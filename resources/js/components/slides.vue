<template>
<div class="carousel">
    <div id="controls-nav">
    <svg  id="left-row" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
  <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
</svg>
 <svg id="right-row" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
  <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
</svg>
<button class="off"></button>

    </div>
    <div class="my-slider " data-aos="fade-down">

        <div v-for="project in projects" :key="project.id" @click="open(project.link)">
            <img
                :src="'/img/works/' + project.id + '.png'"
                class="img-fluid"
                alt="Not Found"
                
            />
            <div class="overlay" >
                <div class="text">
                    <h2>{{ project.name }}</h2>
                    <p>{{ project.description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import { projects as projectsLoad } from "../projects.js";

export default {
    data() {
        return {
            projects: Array
        };
    },
    mounted() {
        this.projects = projectsLoad;
    },
    methods : {
        open(link)
        {
            if(link)
            {
                window.open(link)
            }
        }
    }
};
</script>
