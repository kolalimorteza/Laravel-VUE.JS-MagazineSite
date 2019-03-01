<template>
  <div class="container-fluid">
    <div class="page-head"></div>
    <div class="row">
      <div class="col-lg-3 col-sm-12">
        <div class="card m-b-30 border-0">
          <div class="row text-center text-white profile-block" style="height: 100px;">
            <div class="col-4 align-self-center">
              <a href="#">
                <i class="fa fa-phone"></i>
              </a>
            </div>
            <div class="col-4 ml-auto align-self-center">
              <a href="#">
                <i class="fa fa-cog"></i>
              </a>
            </div>
          </div>
          <div class="card-body pro-img mx-auto text-center">
            <img 
            src="getProfilePhoto()" alt="" class="rounded-circle mx-auto d-block">
            
          </div>
          <div class="text-center">
            <h5>{{this.form.name}}</h5>
            <p class="text-muted">{{this.form.type}} of Company</p>
            <p
              class="text-muted p-2"
            >Hi I'm Robert Carlile,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            <button class="btn btn-outline-info mb-3">Follow</button>
          </div>

          <div class="row text-center profile-block">
            <div class="col-6 align-self-center py-3 border-right">
              <p class="profile-count">15,521</p>
              <p class="mb-0">Followers</p>
            </div>
            <div class="col-6 align-self-center py-3">
              <p class="profile-count">772</p>
              <p class="mb-0">Followings</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
              <div class="card-body">
                <a href="#" class="pull-right">View All</a>
                <h6 class="header-title pb-3">Friends (512)</h6>
                <div class="row text-center">
                  <div class="col-sm-12">
                    <a href="#">
                      <img src="assets/images/users/avatar-11.jpg" alt class="img-thumbnail mx-1">
                    </a>
                    <a href="#">
                      <img src="assets/images/users/avatar-12.jpg" alt class="img-thumbnail mx-1">
                    </a>
                    <a href="#">
                      <img src="assets/images/users/avatar-11.jpg" alt class="img-thumbnail mx-1">
                    </a>
                    <a href="#">
                      <img src="assets/images/users/avatar-12.jpg" alt class="img-thumbnail mx-1">
                    </a>
                  </div>
                  <div class="col-sm-12 my-2">
                    <a href="#">
                      <img src="assets/images/users/avatar-12.jpg" alt class="img-thumbnail mx-1">
                    </a>
                    <a href="#">
                      <img src="assets/images/users/avatar-11.jpg" alt class="img-thumbnail mx-1">
                    </a>
                    <a href="#">
                      <img src="assets/images/users/avatar-12.jpg" alt class="img-thumbnail mx-1">
                    </a>
                    <a href="#">
                      <img src="assets/images/users/avatar-11.jpg" alt class="img-thumbnail mx-1">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30 contact">
              <div class="card-body">
                <h6 class="header-title pb-3">Map</h6>
                <div class="map" id="basic-map"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30 contact">
              <div class="card-body">
                <h6 class="header-title pb-3">Contact</h6>
                <ul class="list-unstyled">
                  <li class>
                    <i class="fa fa-phone mr-2"></i>
                    <b>phone</b> : +91 23456 78910
                  </li>
                  <li class="mt-2">
                    <i class="fa fa-envelope-o mt-2 mr-2"></i>
                    <b>Email</b> : mannat.theme@gmail.com
                  </li>
                  <li class="mt-2">
                    <i class="fa fa-map-marker mt-2 mr-2"></i>
                    <b>Location</b> : USA
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-sm-12">
        <div class="card-title tab-2">
          <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
              <a class="nav-link active" href="#about" data-toggle="tab" aria-expanded="false">
                <i class="ti-user mr-2"></i>About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#photo" data-toggle="tab" aria-expanded="false">
                <i class="ti-image mr-2"></i>Photos
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#settings" data-toggle="tab" aria-expanded="false">
                <i class="ti-settings mr-2"></i>Settings
              </a>
            </li>
          </ul>
          <div class="tab-content p-4 bg-white">
            <div class="tab-pane home-text p-4" id="home-6">
              <img src="assets/images/logo_sm.png" alt>
              <h1>Syntra Admin Template</h1>
              <h4 class="text-muted">Sociis natoque penatibus et magnis dis parturient montes.</h4>
            </div>
            <div class="tab-pane active p-4" id="about">
              <div class="row justify-content-center">
                <div class="col-md-12 profile-detail">
                  <div class="text-center">
                    <i class="fa fa-graduation-cap"></i>
                    <h5>Personal Details</h5>
                    <div class="profile-border my-3"></div>
                    <p
                      class="detail-text"
                    >Sorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.Sorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.Sorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                  </div>
                  <div class="row mt-5">
                    <div class="col-md-12">
                      <div class="presonal-inform">
                        <ul class="list-unstyled">
                          <li>
                            <b>Name:</b>Robert N. Carlile
                          </li>
                          <li>
                            <b>Phone:</b>+91 23456 78910
                          </li>
                          <li>
                            <b>Email:</b>RoberCarlile@.com
                          </li>
                          <li>
                            <b>Date of Birth:</b> 6 January 1987
                          </li>
                          <li>
                            <b>Address:</b>Inox Box 1546, Sollins.
                          </li>
                          <li>
                            <b>Nationality:</b> USA
                          </li>
                          <li>
                            <b>Marital Status:</b>Single
                          </li>
                          <li>
                            <b>Languages:</b>English,france
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--END ROW-->
                  <h6 class="mt-3">
                    <i class="ti ti-css3 pr-2"></i>Css3
                    <span class="pull-right">88%</span>
                  </h6>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: 88%"
                      aria-valuenow="88"
                      aria-valuemin="0"
                      aria-valuemax="70"
                    ></div>
                  </div>
                  <h6 class="mt-3">
                    <i class="ti ti-html5 pr-2"></i>HTML5
                    <span class="pull-right">82%</span>
                  </h6>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 82%"
                      aria-valuenow="82"
                      aria-valuemin="0"
                      aria-valuemax="70"
                    ></div>
                  </div>
                  <h6 class="mt-3">
                    <i class="ti ti-wordpress pr-2"></i>Wordpress
                    <span class="pull-right">77%</span>
                  </h6>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-danger"
                      role="progressbar"
                      style="width: 77%"
                      aria-valuenow="77"
                      aria-valuemin="0"
                      aria-valuemax="70"
                    ></div>
                  </div>
                  <h6 class="mt-3">
                    <i class="ti ti-android pr-2"></i>Android
                    <span class="pull-right">94%</span>
                  </h6>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 94%"
                      aria-valuenow="94"
                      aria-valuemin="0"
                      aria-valuemax="70"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="photo">
              <p
                class="py-3 text-muted"
              >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
              <div class="row container-grid nf-col-3 projects-wrapper">
                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post1.jpg"
                      title="30 min ago"
                    >
                      <img class="item-container" src="assets/images/post/post1.jpg" alt="7">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post2.jpg"
                      title="yesterday"
                    >
                      <img
                        class="item-container mfp-fade"
                        src="assets/images/post/post2.jpg"
                        alt="2"
                      >
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post3.jpg"
                      title="3 day ago"
                    >
                      <img class="item-container" src="assets/images/post/post3.jpg" alt="4">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 m-0 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post4.jpg"
                      title="last week"
                    >
                      <img class="item-container" src="assets/images/post/post4.jpg" alt="5">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post5.jpg"
                      title="last month"
                    >
                      <img class="item-container" src="assets/images/post/post5.jpg" alt="6">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post6.jpg"
                      title="last year"
                    >
                      <img class="item-container" src="assets/images/post/post6.jpg" alt="1">
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post1.jpg"
                      title="30 min ago"
                    >
                      <img class="item-container" src="assets/images/post/post1.jpg" alt="7">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post2.jpg"
                      title="yesterday"
                    >
                      <img
                        class="item-container mfp-fade"
                        src="assets/images/post/post2.jpg"
                        alt="2"
                      >
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 p-0 nf-item">
                  <div class="item-box">
                    <a
                      class="cbox-gallary1 mfp-image"
                      href="assets/images/post/post3.jpg"
                      title="3 day ago"
                    >
                      <img class="item-container" src="assets/images/post/post3.jpg" alt="4">
                    </a>
                  </div>
                </div>
              </div>
              <div class="text-right mt-3">
                <a href="#" class="primary">View all 10+ post</a>
              </div>
            </div>
            <div class="tab-pane" id="settings">
              <div class="row">
                <div class="col-lg-12">
                  <form method="post" class="card-box mt-4">
                    <span class="input-icon icon-right">
                      <textarea rows="4" class="form-control" placeholder="Post a new message"></textarea>
                    </span>
                    <div class="pt-3 pull-right">
                      <a class="btn btn-sm btn-outline-secondary">Send</a>
                    </div>
                    <ul class="nav nav-pills profile-pills mt-2">
                      <li>
                        <a href="#">
                          <i class="fa fa-video-camera mx-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-camera mx-2"></i>
                        </a>
                      </li>
                    </ul>
                  </form>

                  <div class="card-body">
                    <form class="form-horizontal form-material">
                      <div class="form-group">
                        <input
                          v-model="form.name" 
                          id="inputName"
                          type="text"
                          placeholder="Full Name"
                          class="form-control form-control-line"
                        >
                        <has-error :form="form" field="name"></has-error>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-4">
                          <input
                            v-model="form.email"
                            type="email"
                            placeholder="Email"
                            class="form-control form-control-line"
                            name="example-email"
                            id="example-email"
                          >
                          <has-error :form="form" field="email"></has-error>
                        </div>
                        <div class="col-md-4">
                          <input
                            v-model="form.password"
                            type="password"
                            id="password"
                            placeholder="password"
                            class="form-control form-control-line"
                          >
                          
                        </div>
                        <div class="col-md-4">
                          <input
                            v-model="form.password"
                            type="password"
                            id="re-password"
                            placeholder="Re-password"
                            class="form-control form-control-line"
                          >
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-6">
                          <input
                            type="text"
                            placeholder="Phone No"
                            class="form-control form-control-line"
                          >
                        </div>
                        <div class="col-sm-6 mt-2">
                          <select class="form-control form-control-line">
                            <option>London</option>
                            <option>India</option>
                            <option>Usa</option>
                            <option>Canada</option>
                            <option>Thailand</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea
                          rows="5"
                          v-model="form.bio"
                          placeholder="Message"
                          class="form-control form-control-line"
                        ></textarea>
                        <has-error :form="form" field="bio"></has-error>
                        <button @click.prevent="updateInfo" type="submit" class="btn btn-info">Update Profile</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
              <div class="card-body">
                <h5 class="header-title pb-3">Activities</h5>
                <div id="user-activities" class="tab-pane">
                  <div class="timeline-2">
                    <div class="time-item">
                      <div class="item-info">
                        <div class="text-muted">5 minutes ago</div>
                        <p>
                          <strong>
                            <a href="#" class="text-info">Robert Carlile</a>
                          </strong> Uploaded a photo
                          <strong>"DSC000586.jpg"</strong>
                        </p>
                      </div>
                    </div>

                    <div class="time-item">
                      <div class="item-info">
                        <div class="text-muted">30 minutes ago</div>
                        <p>
                          <a href="#" class="text-info">Lorem</a> commented your post.
                        </p>
                        <p>
                          <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em>
                        </p>
                      </div>
                    </div>

                    <div class="time-item">
                      <div class="item-info">
                        <div class="text-muted">59 minutes ago</div>
                        <p>
                          <a href="#" class="text-info">Jessi</a> attended a meeting with
                          <a href="#" class="text-success">Robert Carlile</a>.
                        </p>
                        <p>
                          <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em>
                        </p>
                      </div>
                    </div>

                    <div class="time-item">
                      <div class="item-info">
                        <div class="text-muted">5 minutes ago</div>
                        <p>
                          <strong>
                            <a href="#" class="text-info">Robert Carlile</a>
                          </strong>Uploaded 2 new photos
                        </p>
                      </div>
                    </div>

                    <div class="time-item">
                      <div class="item-info">
                        <div class="text-muted">30 minutes ago</div>
                        <p>
                          <a href="#" class="text-info">Lorem</a> commented your post.
                        </p>
                        <p>
                          <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em>
                        </p>
                      </div>
                    </div>

                    <div class="time-item">
                      <div class="item-info">
                        <div class="text-muted">59 minutes ago</div>
                        <p>
                          <a href="#" class="text-info">Jessi</a> attended a meeting with
                          <a href="#" class="text-success">Robert Carlile</a>.
                        </p>
                        <p>
                          <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
    <!--end row-->
  </div>
  <!--end container-->
</template>

<script>
    export default {
        data(){
            return {
                 form: new Form({
                    id:'',
                    name : '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            getProfilePhoto(){
                let photo = (this.form.photo.length > 200) ? this.form.photo : "assets/images/users/"+ this.form.photo ;
                return photo;
            },
            updateInfo(){
                this.$Progress.start();
                if(this.form.password == ''){
                    this.form.password = undefined;
                }
                this.form.put('magapp/public/api/profile')
                .then(()=>{
                     Fire.$emit('AfterCreate');
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            updateProfile(e){
                let file = e.target.files[0];
                let reader = new FileReader();
                let limit = 1024 * 1024 * 2;
                if(file['size'] > limit){
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'You are uploading a large file',
                    })
                    return false;
                }
                reader.onloadend = (file) => {
                    this.form.photo = reader.result;
                }
                reader.readAsDataURL(file);
            }
        },
        created() {
            axios.get("magapp/public/api/profile")
            .then(({ data }) => (this.form.fill(data)));
        }
    }
</script>
