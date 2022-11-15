<!doctype html>
<html lang="en" {{ __('Dashboard') }}>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Aduan Bernama - Dashboard</title>
    <link rel="stylesheet" href={{ asset('backend/css/feather.css') }}>
    <link rel="stylesheet" href={{ asset('backend/backend/css/select2.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/dropzone.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/uppy.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/jquery.steps.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/jquery.timepicker.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/quill.snow.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/simplebar.css') }}>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href={{ asset('backend/css/daterangepicker.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/dataTables.bootstrap4.min.css') }}>
    <link rel="cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- App CSS -->
    <link rel="stylesheet" href={{ asset('backend/css/app-light.css') }} id="lightTheme" disabled>
    <link rel="stylesheet" href={{ asset('backend/css/app-dark.css') }} id="darkTheme">
  </head>
  <body class="vertical  dark  ">
    @include('admin.body.header')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">Welcome!</h2>
                </div>
                <div class="col-auto">
                  <form class="form-inline">
                    <div class="form-group d-none d-lg-inline">
                      <label for="reportrange" class="sr-only">Date Ranges</label>
                      <div id="reportrange" class="px-2 py-2 text-muted">
                        <span class="small"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                      <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <!-- Striped rows -->
                <div class="col-md-12 col-lg-12">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title">Recent Data</strong>
                      <a class="float-right small text-muted" href="#!">View all</a>
                    </div>
                    <div class="card-body my-n2">
                      <table class="table table-striped table-hover table-borderless">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>2474</td>
                            <th scope="col">Brown, Asher D.</th>
                            <td>Ap #331-7123 Lobortis Avenue</td>
                            <td>(958) 421-0798</td>
                            <td>13/09/2020</td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Remove</a>
                                  <a class="dropdown-item" href="#">Assign</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2786</td>
                            <th scope="col">Leblanc, Yoshio V.</th>
                            <td>287-8300 Nisl. St.</td>
                            <td>(899) 881-3833</td>
                            <td>04/05/2019</td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr2">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Remove</a>
                                  <a class="dropdown-item" href="#">Assign</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2747</td>
                            <th scope="col">Hester, Nissim L.</th>
                            <td>4577 Cras St.</td>
                            <td>(977) 220-6518</td>
                            <td>04/06/2019</td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Remove</a>
                                  <a class="dropdown-item" href="#">Assign</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2639</td>
                            <th scope="col">Gardner, Leigh S.</th>
                            <td>P.O. Box 228, 7512 Lectus Ave</td>
                            <td>(537) 315-1481</td>
                            <td>04/08/2019</td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr4">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Remove</a>
                                  <a class="dropdown-item" href="#">Assign</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2238</td>
                            <th scope="col">Higgins, Uriah L.</th>
                            <td>Ap #377-5357 Sed Road</td>
                            <td>(238) 386-0247</td>
                            <td>04/01/2019</td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr5">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Remove</a>
                                  <a class="dropdown-item" href="#">Assign</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- Striped rows -->
              </div> <!-- .row-->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-box fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Package has uploaded successfull</strong></small>
                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-download fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Widgets are updated successfull</strong></small>
                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-inbox fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Notifications have been sent</strong></small>
                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-link fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Link was attached to menu</strong></small>
                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                      </div>
                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .list-group -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-success justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Control area</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Activity</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Droplet</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Upload</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-users fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Users</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Settings</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src={{ asset('backend/js/jquery.min.js') }}></script>
    <script src={{ asset('backend/js/popper.min.js') }}></script>
    <script src={{ asset('backend/js/moment.min.js') }}></script>
    <script src={{ asset('backend/js/bootstrap.min.js') }}></script>
    <script src={{ asset('backend/js/simplebar.min.js') }}></script>
    <script src={{ asset('backend/js/daterangepicker.js') }}></script>
    <script src={{ asset('backend/js/jquery.stickOnScroll.js') }}></script>
    <script src={{ asset('backend/js/tinycolor-min.js') }}></script>
    <script src={{ asset('backend/js/config.js') }}></script>
    <script src={{ asset('backend/js/d3.min.js') }}></script>
    <script src={{ asset('backend/js/topojson.min.js') }}></script>
    <script src={{ asset('backend/js/datamaps.all.min.js') }}></script>
    <script src={{ asset('backend/js/datamaps-zoomto.js') }}></script>
    <script src={{ asset('backend/js/datamaps.custom.js') }}></script>
    <script src={{ asset('backend/js/Chart.min.js') }}></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src={{ asset('backend/js/gauge.min.js') }}></script>
    <script src={{ asset('backend/js/jquery.sparkline.min.js') }}></script>
    <script src={{ asset('backend/js/apexcharts.min.js') }}"></script>
    <script src={{ asset('backend/js/apexcharts.custom.js') }}></script>
    <script src={{ asset('backend/js/jquery.mask.min.js') }}></script>
    <script src={{ asset('backend/js/select2.min.js') }}'></script>
    <script src={{ asset('backend/js/jquery.steps.min.js') }}></script>
    <script src={{ asset('backend/js/jquery.validate.min.js') }}></script>
    <script src={{ asset('backend/js/jquery.timepicker.js') }}></script>
    <script src={{ asset('backend/js/dropzone.min.js') }}></script>
    <script src={{ asset('backend/js/uppy.min.js') }}></script>
    <script src={{ asset('backend/js/quill.min.js') }}></script>
    <script src={{ asset('backend/js/bootstrap-colorpicker.min.js') }}></script>
    <script src={{ asset('backend/js/input-mask.js') }}></script>
    <script src={{ asset('backend/js/jquery.inputmask.bundle.min.js') }}></script>
    <script src={{ asset('backend/js/jquery.countdown.min.js') }}></script>
    <script src={{ asset('backend/js/jquery.countTo.min.js') }}></script>
    <script src={{ asset('backend/js/nouislider.min.js') }}></script>
    <script src={{ asset('backend/js/custom.js') }}></script>
    <script src={{ asset('backend/js/dashboard.v1.js') }}></script>
    
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>