<template>
  <div class="container">
    <div class="page-head">
      <h4 class="mt-2 mb-2">Users List</h4>
    </div>
    <div class="edit-table" v-if="$gate.isAdminOrAuthor()">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="card m-b-30">
            <div class="card-body">
              <h5 class="header-title">List of all user in Application</h5>
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Registered At</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users.data" :key="user.id">
                      <td>{{user.id}}</td>
                      <td>{{user.name}}</td>
                      <td>{{user.email}}</td>
                      <td>{{user.type | upText}}</td>
                      <td>{{user.created_at | myDate}}</td>
                      <td>
                        <a href="#" @click="editModal(user)">
                          <i class="fa fa-edit blue btn btn-sm btn-info"></i>
                        </a>
                        /
                        <a href="#" @click="deleteUser(user.id)">
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
          <form @submit.prevent="editmode ? updateUser() : createUser()">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="field-1" class="control-label">Name</label>
                    <input
                      v-model="form.name"
                      type="text"
                      name="name"
                      placeholder="Name"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('name') }"
                    >
                    <has-error :form="form" field="name"></has-error>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="field-2" class="control-label">Email</label>
                    <input
                      v-model="form.email"
                      type="email"
                      name="email"
                      placeholder="Email Address"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('email') }"
                    >
                    <has-error :form="form" field="email"></has-error>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="field-3" class="control-label">Type User</label>
                    <select
                      name="type"
                      v-model="form.type"
                      id="type"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('type') }"
                    >
                      <option value>Select User Role</option>
                      <option value="admin">Admin</option>
                      <option value="user">Standard User</option>
                      <option value="author">Author</option>
                    </select>
                    <has-error :form="form" field="type"></has-error>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="field-3" class="control-label">Password</label>
                    <input
                      v-model="form.password"
                      type="password"
                      name="password"
                      id="password"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('password') }"
                    >
                    <has-error :form="form" field="password"></has-error>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group no-margin">
                    <label for="field-7" class="control-label">Personal Info</label>
                    <textarea
                      v-model="form.bio"
                      name="bio"
                      id="bio"
                      style="margin-top: 0px; margin-bottom: 0px; height: 137px;"
                      placeholder="Short bio for user (Optional)"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('bio') }"
                    ></textarea>
                    <has-error :form="form" field="bio"></has-error>
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
      users: {},
      form: new Form({
        id:'',
        name : '',
        email: '',
        password: '',
        type: '',
        bio: '',
        photo: ''
      })
    };
  },
  methods: {
    loadUsers() {
      if(this.$gate.isAdminOrAuthor()){
          axios.get("magapp/public/api/user").then(({ data }) => (this.users = data));
                }
    },
    getResults(page = 1) {
        axios.get('magapp/public/api/user?page=' + page)
          .then(response => {
          this.users = response.data;
       });
    },
    updateUser(){
      this.$Progress.start();
        // console.log('Editing data');
        this.form.put('magapp/public/api/user/'+this.form.id)
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
    editModal(user){
      this.editmode = true;
      this.form.reset();
      $('#addNew').modal('show');
      this.form.fill(user);
    },
    newModal(){
        this.editmode = false;
        this.form.reset();
        $('#addNew').modal('show');
    },
    deleteUser(id){
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
                            this.form.delete('magapp/public/api/user/'+id).then(()=>{
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
    createUser() {
      this.$Progress.start();
      this.form.post("magapp/public/api/user")
        .then(()=>{
                    Fire.$emit('AfterCreate');
                    $('#addNew').modal('hide')
                    toast({
                        type: 'success',
                        title: 'User Created in successfully'
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
                axios.get('magapp/public/api/findUser?q=' + query)
                .then((data) => {
                    this.users = data.data
                })
                .catch(() => {
                })
            })
    this.loadUsers();
    Fire.$on('AfterCreate',() => {
               this.loadUsers();
           });
    // setInterval(() => this.loadUsers(), 3000);
  }
};
</script>
