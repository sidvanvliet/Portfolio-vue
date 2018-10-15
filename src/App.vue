<template>
    <div id="app">

        <div id="sidebar">
            <div class="sidebar-item">
                <router-link to="/">Sid van Vliet</router-link>
            </div>
            <div class="sidebar-item">
                <router-link to="/resume">Resume</router-link>
            </div>
            <div class="sidebar-item">
                <router-link to="/portfolio">Portfolio</router-link>
            </div>
            <div class="sidebar-item">
                <router-link to="/contact">Contact</router-link>
            </div>
            <div class="sidebar-item special-link">
                <div class="sidebar-item">
                    <a href="media-centre/index.html">Media Centre</a>
                </div>
            </div>
            <div class="sidebar-item special-link">
                <div class="sidebar-item">
                    <router-link to="/privacy">Privacy Policy</router-link>
                </div>
            </div>

            <div class="mt-3">
                <img src="img/gb.png" alt="flag_gb">
                &nbsp;
                <img @click="changeLang('nl');" src="img/nl.png" alt="flag_nl">
                <language-switcher></language-switcher>
            </div>
        </div>

        <main>

            <!--<transition name="router-anim" enter-active-class="animated fadeIn" leave-active-class="animated fadeOut">-->
                <router-view/>
            <!--</transition>-->

        </main>

    </div>
</template>

<script>
    import LanguageSwitcher from "./components/LanguageSwitcher";
    require('@/assets/css/style.css');
    export default {
        components: {LanguageSwitcher}
    }
</script>