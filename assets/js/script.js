Vue.component("step-navigation-step", {
    template: "#step-navigation-step-template",

    props: ["step", "currentstep"],

    computed: {
        indicatorclass() {
            return {
                active: this.step.id == this.currentstep,
                complete: this.currentstep > this.step.id
            };
        }
    }
});

Vue.component("step-navigation", {
    template: "#step-navigation-template",

    props: ["steps", "currentstep"]
});

Vue.component("step", {
    template: "#step-template",

    props: ["step", "stepcount", "currentstep"],

    computed: {
        active() {
            return this.step.id == this.currentstep;
        },

        firststep() {
            return this.currentstep == 1;
        },

        laststep() {
            return this.currentstep == this.stepcount;
        },

        stepWrapperClass() {
            return {
                active: this.active
            };
        }
    },

    methods: {
        nextStep() {
            this.$emit("step-change", this.currentstep + 1);
        },

        lastStep() {
            this.$emit("step-change", this.currentstep - 1);
        }
    }
});

var v = new Vue({
    el: "#app",

    data: {
        url:'http://localhost/instituto/',

        currentstep: 1,

        steps: [
            {
                id: 1,
                title: "Personal",
                icon_class: "fa fa-user-circle"
            },
            {
                id: 2,
                title: "Detalles",
                icon_class: "fa fa-th-list"
            },
            {
                id: 3,
                title: "Seguridad",
                icon_class: "fa fa-lock"
            }
        ]
    },

    methods: {


        stepChanged(step) {
            this.currentstep = step;
        }

      }

});

/*
var v = new Vue({
  el:'#asignatura',
  data:{
    url:'',
    addArea:false,
    emptyResult:false
  }
  created(){
      this.showAll();
    },
  clearAll(){
    v.addArea= false;
  },
});*/
