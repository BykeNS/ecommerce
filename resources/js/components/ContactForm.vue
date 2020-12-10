<template>
    <div class="container">
<form role="form" method="get" action="#" enctype="multipart/form-data" >

           <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Poduct Name:</label>
                <input type="text" class="form-control" id="" name="name" value="" >
              </div>
              <div class="form-group">
                <label for="">Poduct Description:</label>
                      <textarea class="form-control"  rows="7" name="description" ></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Poduct Price:</label>
                <input type="number" min="5.00" max="10000.00" class="form-control" id="exampleInputEmail1" >
              </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Product Category:<small> (You can select more than one)</small></label>
                    <select name="category[]" class="form-control selectpicker " >
                       
                        <option value=""></option>
                      
                 </select>
             </div>
              <div class="form-group">
                <label for="exampleInputFile">Product Image:</label>
                <div class="input-group">
                    <input type="file" name="image[]"  class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                </div>
              </div>
            </div>
            <div class="card-body">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <div class="btn btn-primary">{{ butonText }} </div>
             </form>
    </div>
   
</template>

<script>
   export default {
    
    data () {
        return {
            buttonText: 'Clict to SEE!!!',
            }
           
    },
    // methods: {
    //     submitForm () {
    //         this.errors = {};
    //         this.isLoading = true;
    //         this.isSuccess = false;
    //         axios.post('/login', this.data)
    //             .then(() => this.isSuccess = true)
    //             .catch(({response}) => {
    //                 if (response.status === 422) {
    //                     this.errors = response.data.errors;
    //                 }
    //             })
    //             .finally(() => this.isLoading = false);
    //     }
    //       }
          
    }
</script>