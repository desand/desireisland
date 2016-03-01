import Vue from 'vue';

//vuestrapbase, vue 版本的 Bootstrap 组件
import vuestrapbase from './vuestrapbase';

//my layouts components
import Fullpage from './components/layouts/Fullpage.vue';
Vue.component('fullpage', Fullpage);

//my css3navigation components
import Css3navigation from './components/Css3navigation.vue';
Vue.component('css3navigation', Css3navigation);

new Vue(vuestrapbase).$mount('body');

