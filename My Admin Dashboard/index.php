<?php 
$page_title = "Dashboard | College Management System";
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
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
    <!-- Custom CSS for enhanced UI -->
    <link href="assets/css/index.css" id="dashboard-style" rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-0">Dashboard Overview</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Welcome back, Admin!</span>
                                <i class="fas fa-user-circle fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-users fs-4 mb-3"></i>
                                <h3>1,258</h3>
                                <p>Total Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-chalkboard-teacher fs-4 mb-3"></i>
                                <h3>85</h3>
                                <p>Total Teachers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-book-open fs-4 mb-3"></i>
                                <h3>24</h3>
                                <p>Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-building fs-4 mb-3"></i>
                                <h3>15</h3>
                                <p>Departments</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Main content area -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Recent Admissions</h4>
                                    <button class="btn btn-sm btn-outline-primary">View All</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Course</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#CM001</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-primary">
                                                                JD
                                                            </span>
                                                        </div>
                                                        <span>John Doe</span>
                                                    </div>
                                                </td>
                                                <td>Computer Science</td>
                                                <td>2023-05-15</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>#CM002</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-danger">
                                                                AS
                                                            </span>
                                                        </div>
                                                        <span>Alice Smith</span>
                                                    </div>
                                                </td>
                                                <td>Electrical Engineering</td>
                                                <td>2023-05-18</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>#CM003</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-warning">
                                                                RJ
                                                            </span>
                                                        </div>
                                                        <span>Robert Johnson</span>
                                                    </div>
                                                </td>
                                                <td>Business Administration</td>
                                                <td>2023-05-20</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Upcoming Events</h4>
                                    <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addEventModal">
                                        Add Event
                                    </button>
                                </div>
                                <div class="pe-3" data-simplebar style="max-height: 400px;">
                                    <div class="event-item">
                                        <h5>Semester Exams</h5>
                                        <p class="text-muted mb-1">June 10 - July 5, 2023</p>
                                        <small class="text-primary"><i class="far fa-calendar-alt me-1"></i> Academic</small>
                                    </div>
                                    <div class="event-item">
                                        <h5>Faculty Meeting</h5>
                                        <p class="text-muted mb-1">June 15, 2023 | 10:00 AM</p>
                                        <small class="text-success"><i class="fas fa-users me-1"></i> Staff</small>
                                    </div>
                                    <div class="event-item">
                                        <h5>Orientation Day</h5>
                                        <p class="text-muted mb-1">July 10, 2023 | All Day</p>
                                        <small class="text-info"><i class="fas fa-user-graduate me-1"></i> Students</small>
                                    </div>
                                    <div class="event-item">
                                        <h5>Sports Day</h5>
                                        <p class="text-muted mb-1">July 20, 2023 | 9:00 AM</p>
                                        <small class="text-warning"><i class="fas fa-running me-1"></i> Activities</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

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

<!-- Add Event Modal -->
<div class="modal fade event-modal" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Add New Event</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="eventForm">
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Event Title</label>
                        <input type="text" class="form-control" id="eventTitle" placeholder="Enter event title" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="eventDescription" rows="3" placeholder="Enter event description"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="startTime" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="startTime">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="endTime" class="form-label">End Time</label>
                            <input type="time" class="form-control" id="endTime">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eventType" class="form-label">Event Type</label>
                        <select class="form-select" id="eventType">
                            <option value="academic">Academic</option>
                            <option value="staff">Staff</option>
                            <option value="student">Student</option>
                            <option value="activities">Activities</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveEvent">Save Event</button>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Custom JavaScript for Event Handling -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the modal
        const addEventModal = new bootstrap.Modal(document.getElementById('addEventModal'));
        const eventsContainer = document.querySelector('.pe-3[data-simplebar]');
        
        // Handle save event button
        document.getElementById('saveEvent').addEventListener('click', function() {
            // Get form values
            const title = document.getElementById('eventTitle').value;
            const description = document.getElementById('eventDescription').value;
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            const startTime = document.getElementById('startTime').value;
            const endTime = document.getElementById('endTime').value;
            const type = document.getElementById('eventType').value;
            
            // Basic validation
            if (!title || !startDate) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Format the date/time display
            let dateDisplay = new Date(startDate).toLocaleDateString('en-US', { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });
            
            if (endDate && endDate !== startDate) {
                dateDisplay += ' - ' + new Date(endDate).toLocaleDateString('en-US', { 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric' 
                });
            }
            
            if (startTime) {
                dateDisplay += ' | ' + formatTime(startTime);
                if (endTime) {
                    dateDisplay += ' - ' + formatTime(endTime);
                }
            }
            
            // Determine type color and icon
            let typeClass, typeIcon;
            switch(type) {
                case 'academic':
                    typeClass = 'text-primary';
                    typeIcon = 'far fa-calendar-alt';
                    break;
                case 'staff':
                    typeClass = 'text-success';
                    typeIcon = 'fas fa-users';
                    break;
                case 'student':
                    typeClass = 'text-info';
                    typeIcon = 'fas fa-user-graduate';
                    break;
                case 'activities':
                    typeClass = 'text-warning';
                    typeIcon = 'fas fa-running';
                    break;
                default:
                    typeClass = 'text-secondary';
                    typeIcon = 'far fa-calendar';
            }
            
            // Create new event item
            const eventItem = document.createElement('div');
            eventItem.className = 'event-item';
            eventItem.innerHTML = `
                <h5>${title}</h5>
                <p class="text-muted mb-1">${dateDisplay}</p>
                <small class="${typeClass}"><i class="${typeIcon} me-1"></i> ${type.charAt(0).toUpperCase() + type.slice(1)}</small>
            `;
            
            // Insert new event at the beginning of the container
            if (eventsContainer.firstChild) {
                eventsContainer.insertBefore(eventItem, eventsContainer.firstChild);
            } else {
                eventsContainer.appendChild(eventItem);
            }
            
            // Reset form and close modal
            document.getElementById('eventForm').reset();
            addEventModal.hide();
            
            // Show success message
            alert('Event added successfully!');
        });
        
        // Helper function to format time
        function formatTime(timeString) {
            if (!timeString) return '';
            const [hours, minutes] = timeString.split(':');
            const hour = parseInt(hours);
            const ampm = hour >= 12 ? 'PM' : 'AM';
            const displayHour = hour % 12 || 12;
            return `${displayHour}:${minutes} ${ampm}`;
        }
    });
</script>
</body>
</html>