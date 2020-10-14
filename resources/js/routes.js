import form from './custom-components/form.vue'
import users from './custom-components/users.vue'
import user from './custom-components/user.vue'
export const routes = [
    {path: '/', component : form, name : 'home'},
    {path: '/users', component : users, name : 'users'},
    {path: '/user/:id', component : user, name : 'user'},
    {path :'*', redirect: {name:'home'}}
]