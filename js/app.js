//import { trackSearchInput } from "./js/components/search.js";

import SideNav from "./js/components/side-nav.js";
import SearchFlights from "./js/components/search.js";
import FormValidation from "./js/components/form-validation.js";
import SignIn from "./js/components/sign-in.js";
import TopHeader from "./js/components/top-header.js";
import DeleteFlight from "./js/components/delete-flight.js";

const components = [
  //{ Class: App, selectorName: "app" },
  { Class: SideNav, selectorName: "side-nav" },
  { Class: SearchFlights, selectorName: "search-flights" },
  { Class: FormValidation, selectorName: "form-validation" },
  { Class: SignIn, selectorName: "sign-in" },
  { Class: TopHeader, selectorName: "top-header" },
  { Class: DeleteFlight, selectorName: "delete-flight" },
];

class ComponentInstantiator {
  constructor() {
    this.createComponents();
    //this.dispatchReady();
    return this;
  }

  createComponents() {
    this.componentsInstantiated = {};

    components.map((component) => {
      const nodes = [];
      // select all DOM-nodes with the data-component attribute:
      const nodeItems = [...document.querySelectorAll("[data-component='" + component.selectorName + "']")];

      nodeItems.map((nodeItem) => {
        // instantiate component with nodeItem as param:
        nodes.push(new component.Class(nodeItem));
      });

      // add to componentsList object:
      if (nodes.length) this.componentsInstantiated[component.selectorName] = nodes;
    });
  }

  /*     dispatchReady() {
      const event = new CustomEvent(EventTypes.ALL_COMPONENTS_READY);
      EventBus.dispatchEvent(event);
    } */

  getComponents(selectorName) {
    return selectorName ? this.componentsInstantiated[selectorName] : this.componentsInstantiated;
  }
}

/* Make your App accessible via window.App */
window.App = new ComponentInstantiator();

/* Access components list */
// console.log('components on this page', window.App.getComponents())

//trackSearchInput();
