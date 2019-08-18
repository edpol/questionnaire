<template>
    <div class="container">
        <div class="row justify-content-center">
            <label for="wtf">New Heading: </label>&nbsp;
            <input id="wtf" type="text" v-model="newHeading">&nbsp;
            <button v-on:click="addHeading" class="btn btn-primary">Add Heading</button>
            <br />
            <ol><li v-for="heading in headings" v-text="heading.heading"></li></ol>
        </div>
    </div>
</template>

<script>

    export default {
        components: {
            task: {
                id: '',
                name: '',
                color: ''
            }
        },
        mounted() {
            console.log('Component mounted 2.')
        },
        data() {
            return {
                headings:  undefined,
                newHeading: '',
                errors: '',
            };
        },
        created() {
            this.fetchHeadings();
        },

        methods: {
            fetchHeadings() {
                window.axios.get('/api/headings')
                    .then(({ data }) => {
                        this.headings = data;
                        console.log(this.headings);
                    }).catch(function(error)  {
//                        this.errors = error;
                        console.log(error);
                    })
            },
            addHeading() {
                let newRow = {id: 0, heading: this.newHeading};
                this.headings.push(newRow);
// axios post data
                this.newHeading = '';
            },
            deleteHeading() {

            }
        }
    }
</script>
