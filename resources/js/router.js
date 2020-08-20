// import vue since npm install was run, it placed files in node_modules folder including vue
import Vue from 'vue';
// This is for importing vuerouter from node_modules/dependencies. Since it is a plugin,
// you will need to initialize and create an object of this class later
// You can use any name you want but your router name(in this case, Vuerouter) has to match the name
// inside Vue.use(routeName);
import VueRouter from 'vue-router';

//This line is to initialize vue router after import from node_modules/dependencies
Vue.use(VueRouter);

// importing components to be used in specific routes
import ExampleComponent from './components/ExampleComponent';
import ContactsCreate from './views/ContactsCreate';
import ContactsShow from './views/ContactsShow';
import ContactsEdit from './views/ContactsEdit';
import ContactsIndex from './views/ContactsIndex';
import BirthdaysIndex from './views/BirthdaysIndex';
import Logout from './actions/Logout';

// make new VueRouter object
export default new VueRouter({
    // an array of routes
    routes: [{
            path: '/',
            component: ExampleComponent,
            meta: { title: 'Welcome' }
        }, {
            path: '/contacts',
            component: ContactsIndex,
            meta: { title: 'All Contacts' }
        },
        {
            path: '/contacts/create',
            component: ContactsCreate,
            meta: { title: 'Create Contacts' }
        }, {
            path: '/contacts/:id',
            component: ContactsShow,
            meta: { title: 'Show Contacts' }
        }, {
            path: '/contacts/:id/edit',
            component: ContactsEdit,
            meta: { title: 'Edit Contacts' }
        }, {
            path: '/birthdays',
            component: BirthdaysIndex,
            meta: { title: 'All Birthdays' }
        }, {
            path: '/logout',
            component: Logout,
        },
    ],

    // This is to make sure it doesn't use legacy IE7 stuff that breaks modern websites
    mode: 'history'
});