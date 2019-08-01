<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component in template tag</div>
                    <div class="card-body">
                        <ul><li v-for="task in tasks" v-text="task.description"></li></ul>
                    </div>
                    <h4>All Tasks</h4>
                    <ul class="list-group">
                        <li v-if='list.length === 0'>There are no tasks yet!!</li>
                        <li class="list-group-item" v-for="(task, index) in list">{{ task.body }}</li>
                    </ul>
                </div>
            </div>
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
                list: [],
                errors: [],
                tasks: [
                    {description: 'Go to work', complete: false},
                    {description: 'Go to the email', complete: false},
                    {description: 'Go to the farm', complete: true},
                    {description: 'Go to the store', complete: true}
                ]
            }
        },
        created() {
            console.log('this> ');
            console.log(this);
            this.fetchHeadings();
        },
        methods: {
            fetchHeadings() {
                axios.get('/api/headings')
                .then(function (response) {
//                    this.list = response.data;
                    console.log(response.data);
                }).catch(function(error)  {
//                    this.errors = error;
                    console.log(error);
                })
            },
        }
    }
</script>
