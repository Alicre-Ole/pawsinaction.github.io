<?php
    include_once('utilities/dbconnect.php');
    include_once('includes/nav.php');
?>
    <div style="background-color: #001C54; height:80px;"></div>
    <div class="container-fluid bg-blue" style="padding:90px 0 0 0; opacity:.8; background-color:#f9f9f9;">
        <div class="container">
            <div>
                <h1 style="font-size: 50px;">Wish A Pet <i class="fas fa-star text-warning"></i></h1><hr>
            </div><br><br>
            <div style="font-size:12px;">
            <form action="processes/addWish.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <h2>Wishers Information:</h2>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="form-outline">
                            <input style="background-color: white;" type="text" name="name" placeholder="no special characters allowed" class="form-control input" required/>
                            <label class="form-label" for="name">Name</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="number" name="number"  class="form-control input" placeholder="09xxxxxxxxx" required/>
                            <label class="form-label" for="number">Phone Number</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="email" name="email"  class="form-control input" placeholder="johnDoe@gmail.com" required/>
                            <label class="form-label" for="email">Email Address</label>
                        </div>
                    </div>
                </div>
                <br>
                <h2>Pet Details:</h2>
                <div class="row mb-12">
                        <div class="form-outline col-md-3">
                            <select id="type" name="type" style="font-size: 15px;" class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                            <label class="form-label" for="type">Animal Type</label>
                        </div>
                        <div class="form-outline col-md-3">
                            <select id="gender" name="gender" style="font-size: 15px;" class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label class="form-label" for="type">Gender</label>
                        </div>
                        <div class="form-outline col-md-3">
                            <select id="energy" name="energy" style="font-size: 15px;" class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Low">Low</option>
                                <option value="Medium">Medium</option>
                                <option value="High">High</option>
                            </select>
                            <label class="form-label" for="energy">Energy Level</label>
                        </div>
                        <div class="form-outline col-md-3">
                            <input type="text" name="breed"  class="form-control input" placeholder="no special characters allowed"/>
                            <label class="form-label" for="breed">Breed</label>
                        </div>
                        <div class="form-outline col-md-3" style="display: none;">
                            <input type="text" name="status" value="Pending"  class="form-control input" required/>
                            <label class="form-label" for="status">Status</label>
                        </div>
                </div>
                <br><br>
                <!-- Submit button -->
                <button style="padding: 10px; font-size:15px;" type="submit" class="btn btn-primary btn-block mb-4">Submit this Wish</button>
            </form>
            </div><br><br><br><br>
        </div>
    </div><br><br><br><br>
    <div class="text-center" style="color:gray; opacity: .3; font-style:italic;">
        <h1>... that this world will be a little heaven for both humans and animals ...</h1>
    </div>

<?php
    include_once('includes/directory.php');
    include_once('includes/footer.php');
?>