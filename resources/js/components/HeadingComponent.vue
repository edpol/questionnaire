<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component in template tag</div>
                    <div class="card-body">
                        I'm an example component 2 {{joe}}.
                        <hr />
                        <h2>All Tasks</h2>
                        <ul><li v-for="task in tasks" v-text="task.description"></li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        components: {
            'task': '<li><slot></slot></li>',
        },
        mounted() {
            console.log('Component mounted 2.')
        },
        data() {
            return {
                'joe': 'cool',
                tasks: [
                    {description: 'Go to work', complete: false},
                    {description: 'Go to the email', complete: false},
                    {description: 'Go to the farm', complete: true},
                    {description: 'Go to the store', complete: true}
                ]
            }
        },
        methods: {
            fetchHeaderList() {
                axios.get('api/tasks').then((res) => {
                    this.list = res.data;
                });
            },
        }
    }
</script>
