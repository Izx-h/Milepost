import { createApp } from 'vue';
import CostEstimator from './components/CostEstimator.vue';
import JourneyTimeline from './components/JourneyTimeline.vue';
import VehicleRequest from './components/VehicleRequest.vue';

const widgets = {
    'cost-estimator': CostEstimator,
    'journey-timeline': JourneyTimeline,
    'vehicle-request': VehicleRequest,
};

for (const element of document.querySelectorAll('[data-widget]')) {
    const component = widgets[element.dataset.widget];

    if (!component) continue;

    const props = {};
    if (element.dataset.compact) props.compact = element.dataset.compact === 'true';
    if (element.dataset.whatsappNumber !== undefined) props.whatsappNumber = element.dataset.whatsappNumber;

    createApp(component, props).mount(element);
}
