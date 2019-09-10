<template>
    <div class="container">
        <div class="row justify-content-center">
            <p>
                <label for="wtf">New Heading: </label>&nbsp;
                <input id="wtf" type="text" v-model="newHeading">&nbsp;
                <button v-on:click="addHeading" class="btn btn-primary">Add Heading</button>
            </p>
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
                http_host: window.location - window.location.pathname,
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
                        this.errors = error;
                        console.log(error);
                    })
            },
            addHeading() {
                let url = window.location;
                console.log(url);
                console.log(this.http_host);
                let host = window.location.host.split(':')[0];
                console.log(host);
                let newRow = {id: 0, heading: this.newHeading};
                this.headings.push(newRow);
                this.newHeading = '';

                window.axios.post(url, newRow)
                    .then(({data}) => {
                        this.response = data;
                        console.log(url);
                        console.log(data);
                    })
                    .catch(({ error }) => {
                        // handle error
                        console.log('Error - ' + url);
                        console.log(error);
                    });
            },
            deleteHeading() {
                // maybe just hide it instead?
            }
        }
    }
</script>
