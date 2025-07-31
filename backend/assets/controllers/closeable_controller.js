import { Controller } from '@hotwired/stimulus';

// Should be add after stimulus
export default class extends Controller {
    async close() {
        this.element.style.width = '0';

        await this.#waitForAnimation();
        this.element.remove();
    }

    #waitForAnimation() {
        return Promise.all(
            this.element.getAnimations().map((animation) => animation.finished),
        );
    }
}
