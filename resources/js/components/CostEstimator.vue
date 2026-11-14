<script setup>
import { computed, reactive } from 'vue';

const example = {
    vehicle: 2100000,
    japan: 115000,
    shipping: 250000,
    duty: 1220000,
    clearance: 140000,
    service: 100000,
    delivery: 50000,
};

const costs = reactive({ ...example, yardPrice: '' });
const rows = [
    { key: 'vehicle', label: 'Vehicle purchase in Japan' },
    { key: 'japan', label: 'Japan-side handling & export' },
    { key: 'shipping', label: 'Shipping + marine insurance' },
    { key: 'duty', label: 'Estimated KRA duty & levies' },
    { key: 'clearance', label: 'Mombasa clearing & registration' },
    { key: 'service', label: 'Approx. service fee / commission' },
    { key: 'delivery', label: 'Delivery to your location' },
];

const total = computed(() => rows.reduce((sum, row) => sum + Math.max(0, Number(costs[row.key]) || 0), 0));
const yardDifference = computed(() => Math.round(Number(costs.yardPrice || 0) - total.value));

function money(value) {
    const amount = Math.round(Number(value) || 0);
    return `KES ${new Intl.NumberFormat('en-KE', { maximumFractionDigits: 0 }).format(amount)}`;
}

function resetExample() {
    Object.assign(costs, example, { yardPrice: '' });
}
</script>

<template>
    <div class="estimate-layout">
        <div class="estimate-inputs">
            <div class="estimate-inputs__heading">
                <span class="manifest-label">EDITABLE PLANNING FIGURES</span>
                <p>Enter the costs from a car quote. Demo values are prefilled so the worksheet is ready to explore.</p>
            </div>
            <label v-for="row in rows" :key="row.key" class="cost-input-row">
                <span>{{ row.label }}<small v-if="row.key === 'duty'">Confirm against current KRA valuation</small><small v-if="row.key === 'service'">Example starts at approx. KES 100,000; confirm the actual fee in writing</small></span>
                <span class="cost-input-wrap"><b>KES</b><input v-model.number="costs[row.key]" type="number" min="0" step="5000" inputmode="numeric" :aria-label="row.label"></span>
            </label>
            <label class="cost-input-row cost-input-row--comparison">
                <span>Comparable yard's all-in price<small>Optional · use a written quote for the same spec</small></span>
                <span class="cost-input-wrap"><b>KES</b><input v-model.number="costs.yardPrice" type="number" min="0" step="5000" inputmode="numeric" aria-label="Comparable yard all-in price"></span>
            </label>
            <button class="reset-estimate" type="button" @click="resetExample">↺ Restore example figures</button>
        </div>
        <aside class="estimate-result" aria-live="polite" aria-atomic="true">
            <div class="estimate-result__top"><span class="manifest-label">YOUR INDICATIVE TOTAL</span><span class="demo-tag demo-tag--light"><i aria-hidden="true"></i> DEMO ESTIMATE</span></div>
            <p class="estimate-result__total">{{ money(total) }}</p>
            <p class="estimate-result__sub">Sum of the cost lines you entered. It is not a customs bill, written quote or payment request.</p>
            <div class="estimate-result__line"></div>
            <div class="estimate-result__breakdown">
                <div v-for="row in rows" :key="`summary-${row.key}`"><span>{{ row.label }}</span><strong>{{ money(costs[row.key]) }}</strong></div>
            </div>
            <div v-if="Number(costs.yardPrice) > 0" class="estimate-comparison">
                <span>{{ yardDifference >= 0 ? 'Below your entered yard quote' : 'Above your entered yard quote' }}</span>
                <strong>{{ money(Math.abs(yardDifference)) }}</strong>
            </div>
            <div v-else class="estimate-comparison estimate-comparison--empty">
                <span>Want a comparison?</span><strong>Add a comparable yard quote ↖</strong>
            </div>
            <a class="button button--paper" href="#request">Ask for a written quote <span aria-hidden="true">↗</span></a>
            <p class="estimate-result__note">KRA valuation, vehicle eligibility and final charges must be confirmed before a bid. No payments are processed on this website.</p>
        </aside>
    </div>
</template>
