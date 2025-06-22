<?php 
$page_title = "Academic Calendar | College Management System";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="College Management System" name="description" />
    <meta content="YourCompany" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    
    <!-- FullCalendar CSS -->
    <link href="assets/libs/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />
    
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
    <style>
        .fc-event {
            cursor: pointer;
        }
        .fc-event-exam {
            border-color: #dc3545;
            background-color: #dc3545;
        }
        .fc-event-holiday {
            border-color: #28a745;
            background-color: #28a745;
        }
        .fc-event-lecture {
            border-color: #007bff;
            background-color: #007bff;
        }
        .fc-event-meeting {
            border-color: #6f42c1;
            background-color: #6f42c1;
        }
    </style>
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Academic Calendar</h4>
                            <div class="page-title-right">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">
                                    <i class="mdi mdi-plus me-1"></i> Add Event
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Calendar View Options -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="btn-group" role="group">
                            <button id="monthView" class="btn btn-outline-secondary active">Month</button>
                            <button id="weekView" class="btn btn-outline-secondary">Week</button>
                            <button id="dayView" class="btn btn-outline-secondary">Day</button>
                            <button id="listView" class="btn btn-outline-secondary">List</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            <div class="btn-group" role="group">
                                <button id="prevPeriod" class="btn btn-outline-secondary"><i class="mdi mdi-chevron-left"></i></button>
                                <button id="todayBtn" class="btn btn-outline-secondary">Today</button>
                                <button id="nextPeriod" class="btn btn-outline-secondary"><i class="mdi mdi-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Calendar -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Upcoming Events</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Event</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Location</th>
                                                <th>Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Midterm Exams</td>
                                                <td>June 15, 2023</td>
                                                <td>9:00 AM - 12:00 PM</td>
                                                <td>Main Campus</td>
                                                <td><span class="badge bg-danger">Exam</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Faculty Meeting</td>
                                                <td>June 18, 2023</td>
                                                <td>2:00 PM - 4:00 PM</td>
                                                <td>Conference Room A</td>
                                                <td><span class="badge bg-purple">Meeting</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Summer Break</td>
                                                <td>July 1-31, 2023</td>
                                                <td>All Day</td>
                                                <td>-</td>
                                                <td><span class="badge bg-success">Holiday</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Event Modal -->
                <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addEventModalLabel">Add New Event</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="eventForm">
                                    <div class="mb-3">
                                        <label for="eventTitle" class="form-label">Event Title</label>
                                        <input type="text" class="form-control" id="eventTitle" placeholder="Enter event title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="eventType" class="form-label">Event Type</label>
                                        <select class="form-select" id="eventType">
                                            <option value="lecture">Lecture</option>
                                            <option value="exam">Exam</option>
                                            <option value="meeting">Meeting</option>
                                            <option value="holiday">Holiday</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="startDate" class="form-label">Start Date</label>
                                            <input type="date" class="form-control" id="startDate">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="endDate" class="form-label">End Date</label>
                                            <input type="date" class="form-control" id="endDate">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="startTime" class="form-label">Start Time</label>
                                            <input type="time" class="form-control" id="startTime">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="endTime" class="form-label">End Time</label>
                                            <input type="time" class="form-control" id="endTime">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="eventLocation" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="eventLocation" placeholder="Enter location">
                                    </div>
                                    <div class="mb-3">
                                        <label for="eventDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="eventDescription" rows="3" placeholder="Enter description"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="saveEvent">Save Event</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'includes/rightbar.php'; ?>
<?php include 'includes/script.php'; ?>

<!-- FullCalendar JS -->
<script src="assets/libs/fullcalendar/main.min.js"></script>
<script src="assets/libs/fullcalendar/locales-all.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize calendar
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: false,
            locale: 'en',
            events: [
                {
                    title: 'Midterm Exams',
                    start: '2023-06-15T09:00:00',
                    end: '2023-06-15T12:00:00',
                    className: 'fc-event-exam',
                    extendedProps: {
                        location: 'Main Campus',
                        description: 'All departments midterm exams'
                    }
                },
                {
                    title: 'Faculty Meeting',
                    start: '2023-06-18T14:00:00',
                    end: '2023-06-18T16:00:00',
                    className: 'fc-event-meeting',
                    extendedProps: {
                        location: 'Conference Room A',
                        description: 'Monthly faculty meeting'
                    }
                },
                {
                    title: 'Summer Break',
                    start: '2023-07-01',
                    end: '2023-07-31',
                    className: 'fc-event-holiday',
                    allDay: true,
                    extendedProps: {
                        location: '',
                        description: 'College summer break'
                    }
                }
            ],
            eventClick: function(info) {
                // Handle event click (show details, edit, etc.)
                alert('Event: ' + info.event.title + '\n' +
                      'Start: ' + info.event.start.toLocaleString() + '\n' +
                      'Location: ' + info.event.extendedProps.location);
            },
            dateClick: function(info) {
                // Handle date click (add new event)
                $('#startDate').val(info.dateStr);
                $('#endDate').val(info.dateStr);
                $('#addEventModal').modal('show');
            }
        });
        calendar.render();

        // Calendar view controls
        $('#monthView').click(function() {
            calendar.changeView('dayGridMonth');
            $('.fc-view-button').removeClass('active');
            $(this).addClass('active');
        });
        $('#weekView').click(function() {
            calendar.changeView('timeGridWeek');
            $('.fc-view-button').removeClass('active');
            $(this).addClass('active');
        });
        $('#dayView').click(function() {
            calendar.changeView('timeGridDay');
            $('.fc-view-button').removeClass('active');
            $(this).addClass('active');
        });
        $('#listView').click(function() {
            calendar.changeView('listMonth');
            $('.fc-view-button').removeClass('active');
            $(this).addClass('active');
        });

        // Navigation controls
        $('#prevPeriod').click(function() {
            calendar.prev();
        });
        $('#nextPeriod').click(function() {
            calendar.next();
        });
        $('#todayBtn').click(function() {
            calendar.today();
        });

        // Save event
        $('#saveEvent').click(function() {
            var newEvent = {
                title: $('#eventTitle').val(),
                start: $('#startDate').val() + ($('#startTime').val() ? 'T' + $('#startTime').val() : ''),
                end: $('#endDate').val() + ($('#endTime').val() ? 'T' + $('#endTime').val() : ''),
                className: 'fc-event-' + $('#eventType').val(),
                extendedProps: {
                    location: $('#eventLocation').val(),
                    description: $('#eventDescription').val()
                }
            };
            
            if ($('#eventType').val() === 'holiday' || !$('#startTime').val()) {
                newEvent.allDay = true;
            }
            
            calendar.addEvent(newEvent);
            $('#addEventModal').modal('hide');
            $('#eventForm')[0].reset();
        });
    });
</script>

</body>
</html>