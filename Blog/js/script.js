var myObject = new Vue({
    el: '#app',
    data: {
            name : null,
            title : null,
            loading: true
        },
        mounted (){
            axios
                .get('./includes/api.php')
                .then(response => {
                    console.log(response)
                    this.name = (response.data.fname + " " + response.data.lname);
                    this.title = response.data.title;
                })
      .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false)
        }
})


$(document).ready({
  
})