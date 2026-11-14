<script setup>
import { computed, ref } from 'vue';

const props = defineProps({
    compact: { type: Boolean, default: false },
});

const stages = [
    { label: 'Brief', title: 'Vehicle brief agreed', note: 'The buyer’s model, budget and bid ceiling are written down.', proof: 'Request summary and approved bid limit', status: 'complete' },
    { label: 'Bid', title: 'Bid won in Japan', note: 'The customer reviews the result and the vehicle cost before export payments.', proof: 'Auction sheet and vehicle invoice', status: 'complete' },
    { label: 'Checks', title: 'Inspection and export paperwork', note: 'Pre-export checks and shipping documentation are prepared for the vehicle.', proof: 'Inspection certificate and export documents', status: 'complete' },
    { label: 'At sea', title: 'Loaded for Mombasa', note: 'The car is on the vessel. Sailing and arrival timing can change.', proof: 'Bill of lading and vessel details', status: 'current' },
    { label: 'Port', title: 'Arrived in Mombasa', note: 'The vehicle reaches port and Kenya-side costs are confirmed.', proof: 'Arrival notice and clearance estimate', status: 'upcoming' },
    { label: 'Clearance', title: 'Duty and clearance', note: 'The customer settles the confirmed KRA duty and agreed clearance charges.', proof: 'Customs entry and payment records', status: 'upcoming' },
    { label: 'Handover', title: 'Collect or arrange delivery', note: 'The customer collects in Mombasa or confirms a delivery destination.', proof: 'Handover record and registration papers', status: 'upcoming' },
];

const activeIndex = ref(3);
const activeStage = computed(() => stages[activeIndex.value]);
</script>

<template>
    <div class="shipment-timeline" :class="{ 'shipment-timeline--compact': props.compact }">
        <div class="shipment-timeline__rail" role="list" aria-label="Illustrative vehicle journey milestones">
            <button v-for="(stage, index) in stages" :key="stage.label" type="button" class="journey-step" :class="[`journey-step--${stage.status}`, { 'journey-step--selected': activeIndex === index }]" :aria-pressed="activeIndex === index" :aria-label="`${stage.title}. ${stage.status}. Select for more detail.`" @click="activeIndex = index">
                <span class="journey-step__dot"><span>{{ String(index + 1).padStart(2, '0') }}</span></span>
                <span class="journey-step__label">{{ stage.label }}</span>
            </button>
        </div>
        <div class="shipment-timeline__detail" aria-live="polite">
            <div class="shipment-timeline__detail-top"><span class="manifest-label">SAMPLE MILESTONE / {{ String(activeIndex + 1).padStart(2, '0') }}</span><span class="demo-tag demo-tag--plain"><i aria-hidden="true"></i> {{ activeStage.status === 'current' ? 'EXAMPLE STATUS' : 'ILLUSTRATIVE' }}</span></div>
            <h4>{{ activeStage.title }}</h4>
            <p>{{ activeStage.note }}</p>
            <div class="shipment-timeline__proof"><span class="shipment-timeline__proof-icon">↳</span><span><small>EXAMPLE PROOF</small><strong>{{ activeStage.proof }}</strong></span></div>
        </div>
        <p class="timeline-disclaimer">Sample milestone sequence · not connected to live shipment data.</p>
    </div>
</template>
