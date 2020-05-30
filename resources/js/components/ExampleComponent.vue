<template>
    <div class="columns">
        <div class="column">
            <div class="message is-success">
                <div class="message-body">
                    Buefy DEMO

                    <b-field label="Select a date">
                        <b-datepicker v-model="date"
                            :first-day-of-week="1"
                            placeholder="Click to select...">

                            <button class="button is-primary"
                                @click="date = new Date()">
                                <b-icon icon="calendar-today"></b-icon>
                                <span>Today</span>
                            </button>

                            <button class="button is-danger"
                                @click="date = null">
                                <b-icon icon="close"></b-icon>
                                <span>Clear</span>
                            </button>
                        </b-datepicker>
                    </b-field>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                date: new Date()
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
