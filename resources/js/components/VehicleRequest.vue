<script setup>
import { computed, reactive, ref } from 'vue';

const props = defineProps({
    whatsappNumber: { type: String, default: '' },
});

const form = reactive({
    name: '',
    phone: '',
    model: '',
    body: '',
    budget: '',
    year: '',
    notes: '',
});

const preparedMessage = ref('');
const statusMessage = ref('');
const cleanBusinessNumber = computed(() => String(props.whatsappNumber || '').replace(/\D/g, ''));

function formatBudget(value) {
    const amount = Number(value);
    return amount > 0 ? `KES ${new Intl.NumberFormat('en-KE', { maximumFractionDigits: 0 }).format(amount)}` : 'Not specified';
}

function buildMessage() {
    return [
        'Hello, I would like help sourcing a car from Japan.',
        '',
        `Name: ${form.name.trim()}`,
        `My WhatsApp: ${form.phone.trim()}`,
        `Vehicle / model: ${form.model.trim() || 'Open to suggestions'}`,
        `Body type: ${form.body || 'Open to suggestions'}`,
        `Budget: ${formatBudget(form.budget)}`,
        `Preferred registration year: ${form.year || 'Open to guidance'}`,
        `Other requirements: ${form.notes.trim() || 'None added'}`,
        '',
        'Please share the estimated full landed cost and explain the bidding terms before any bid is placed.',
    ].join('\n');
}

async function copyPreparedMessage() {
    try {
        await navigator.clipboard.writeText(preparedMessage.value);
        statusMessage.value = 'Request copied. Paste it into WhatsApp when you are ready.';
    } catch {
        statusMessage.value = 'Your request is ready below. Select and copy it into WhatsApp.';
    }
}

async function prepareRequest() {
    preparedMessage.value = buildMessage();

    if (cleanBusinessNumber.value) {
        const url = `https://wa.me/${cleanBusinessNumber.value}?text=${encodeURIComponent(preparedMessage.value)}`;
        window.open(url, '_blank', 'noopener,noreferrer');
        statusMessage.value = 'WhatsApp opened in a new tab. Review the message and send it when ready.';
        return;
    }

    if (navigator.share) {
        try {
            await navigator.share({ title: 'Vehicle import request', text: preparedMessage.value });
            statusMessage.value = 'Share sheet opened. Choose WhatsApp if you want to share this request.';
            return;
        } catch (error) {
            if (error?.name === 'AbortError') {
                statusMessage.value = 'Nothing was sent. Your prepared message is still available below.';
                return;
            }
        }
    }

    await copyPreparedMessage();
}
</script>

<template>
    <form class="vehicle-request-form" @submit.prevent="prepareRequest">
        <div class="vehicle-request-form__head">
            <span class="manifest-label">NO SIGN-UP / NO PAYMENT</span>
            <h3>Tell us what you have in mind.</h3>
            <p>We'll prepare a message you can review. This page does not store or send your details to an importer.</p>
        </div>
        <div class="form-grid">
            <label class="form-field"><span>Your name <b>*</b></span><input v-model.trim="form.name" name="name" type="text" autocomplete="name" maxlength="80" required placeholder="e.g. Amina"></label>
            <label class="form-field"><span>Your WhatsApp <b>*</b></span><input v-model.trim="form.phone" name="phone" type="tel" autocomplete="tel" maxlength="30" required placeholder="e.g. 07xx xxx xxx"></label>
            <label class="form-field form-field--wide"><span>Model or make</span><input v-model.trim="form.model" name="model" type="text" maxlength="100" placeholder="e.g. Toyota Harrier, Honda Fit"></label>
            <label class="form-field"><span>Body type</span><select v-model="form.body" name="body"><option value="">Open to suggestions</option><option>Hatchback</option><option>Sedan</option><option>SUV / Crossover</option><option>Wagon</option><option>Van</option><option>Pickup</option><option>Other</option></select></label>
            <label class="form-field"><span>Budget (KES)</span><input v-model.number="form.budget" name="budget" type="number" min="0" step="50000" inputmode="numeric" placeholder="e.g. 2500000"></label>
            <label class="form-field"><span>Preferred first-registration year</span><input v-model.number="form.year" name="year" type="number" min="2000" max="2035" step="1" inputmode="numeric" placeholder="e.g. 2020"></label>
            <label class="form-field form-field--wide"><span>Must-haves or questions</span><textarea v-model.trim="form.notes" name="notes" rows="3" maxlength="400" placeholder="Fuel, transmission, colour, or a question about the process"></textarea></label>
        </div>
        <p class="form-private-note"><span aria-hidden="true">↳</span> Your details stay in this browser until you choose to share the message.</p>
        <button class="button button--primary button--full" type="submit">Prepare my WhatsApp request <span aria-hidden="true">↗</span></button>
        <div v-if="preparedMessage" class="prepared-message" aria-live="polite">
            <div class="prepared-message__heading"><strong>Review your request</strong><button type="button" class="copy-message" @click="copyPreparedMessage">Copy message</button></div>
            <p class="prepared-message__status">{{ statusMessage }}</p>
            <pre>{{ preparedMessage }}</pre>
            <p v-if="!cleanBusinessNumber" class="prepared-message__setup">The business WhatsApp number has not been configured on this demo. Sharing or copying is available; direct business chat opens after the owner adds a verified number.</p>
        </div>
    </form>
</template>
