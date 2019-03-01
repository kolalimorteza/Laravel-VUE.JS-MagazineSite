<template>
  <div class="container">
    <div class="page-head">
      <h4 class="mt-2 mb-2">Category List</h4>
    </div>
    <div class="edit-table" v-if="$gate.isAdminOrAuthor()">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="card m-b-30">
            <div class="card-body">
              <h5 class="header-title">List of all category in Application</h5>
              <div id="datatable_filter" class="dataTables_filter">
                <button
                  type="button"
                  class="btn btn-success btn-rounded"
                  data-animation="flipInY"
                  data-toggle="modal"
                  data-target="#addNew"
                  @click="newModal"
                >
                  Add New
                  <i class="mdi mdi-account-plus"></i>
                </button>
              </div>

              <div class>
                <table class="table" id="my-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name category</th>
                      <th>Registered At</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="category in categories.data" :key="category.id">
                      <td>{{category.id}}</td>
                      <td>{{category.cat_name}}</td>
                      <td>{{category.created_at | myDate}}</td>
                      <td>{{category.updated_at | myDate}}</td>
                      <td>
                        <a href="#" @click="editModal(category)">
                          <i class="fa fa-edit blue btn btn-sm btn-info"></i>
                        </a>
                        /
                        <a href="#" @click="deletecategory(category.id)">
                          <i class="fa fa-trash btn btn-sm btn-danger"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addNew"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addNewLabelform"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addNewLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editmode ? updatecategory() : createcategory()">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="field-1" class="control-label">Category Name</label>
                    <input
                      v-model="form.cat_name"
                      type="text"
                      name="cat_name"
                      placeholder="cat_name"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('cat_name') }"
                    >
                    <has-error :form="form" field="cat_name"></has-error>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
              <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      editmode: false,
      categories: {},
      form: new Form({
        id:'',
        cat_name : ''
      })
    };
  },
  methods: {
    loadcategorys() {
      if(this.$gate.isAdminOrAuthor()){
          axios.get("magapp/public/api/category").then(({ data }) => (this.categories = data));
                }
    },
    getResults(page = 1) {
        axios.get('magapp/public/api/category?page=' + page)
          .then(response => {
          this.categories = response.data;
       });
    },
    updatecategory(){
      this.$Progress.start();
        // console.log('Editing data');
        this.form.put('magapp/public/api/category/'+this.form.id)
          .then(() => {
             // success
            $('#addNew').modal('hide');
              swal.fire(
                        'Updated!',
                        'Information has been updated.',
                        'success'
                        )
                        this.$Progress.finish();
                         Fire.$emit('AfterCreate');
                })
                .catch(() => {
                    this.$Progress.fail();
                });
    },
    editModal(category){
      this.editmode = true;
      this.form.reset();
      $('#addNew').modal('show');
      this.form.fill(category);
    },
    newModal(){
        this.editmode = false;
        this.form.reset();
        $('#addNew').modal('show');
    },
    deletecategory(id){
      swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        // Send request to the server
                         if (result.value) {
                            this.form.delete('magapp/public/api/category/'+id).then(()=>{
                                        swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                        )
                                    Fire.$emit('AfterCreate');
                                }).catch(()=> {
                                    swal.fire("Failed!", "There was something wronge.", "warning");
                                });
                         }
                    })
    },
    createcategory() {
      this.$Progress.start();
      this.form.post("magapp/public/api/category")
        .then(()=>{
                    Fire.$emit('AfterCreate');
                    $('#addNew').modal('hide')
                    toast({
                        type: 'success',
                        title: 'category Created in successfully'
                        })
                    this.$Progress.finish();
                })
                .catch(()=>{
                })
            }
  },
  created() {
    Fire.$on('searching',() => {
                let query = this.$parent.search;
                axios.get('magapp/public/api/findcategory?q=' + query)
                .then((data) => {
                    this.categories = data.data
                })
                .catch(() => {
                })
            })
    this.loadcategorys();
    Fire.$on('AfterCreate',() => {
               this.loadcategorys();
           });
  }
};
</script>
