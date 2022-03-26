<div class="alert"></div>
<div class="body__container__form">
    <div class="container__form">
        <form method="POST" enctype="multipart/form-data" class="form__data" >
            <fieldset>
            <legend>Edit new student</legend>
                <div class="data__fields">
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="action" value="save"  class="btn btn-success">Save</button>
                        <button type="submit" name="action" value="cancel"  class="btn btn-warning">Cancel</button>
                        <button type="submit" name="action" value="delete"  class="btn btn-warning">Delete</button>
                    </div>

                    <div class="container__form__image"> 
                        <img
                        src="https://images.unsplash.com/profile-fb-1642446137-6bae7cc893b9.jpg?dpr=2&auto=format&fit=crop&w=60&h=60&q=60&crop=faces&bg=fff"
                        class="image__avatar"
                        />
                        <input type="file" id="image__input" name="studentImage" accept="image/*" />
                        <label for="image__input" id="image__label">
                        Choose Photo
                        </label>
                    </div>

                    <div class="fields">
                        <label for="studentId">ID:</label>
                        <input type="text" required readonly class="form-control" value="<?php echo $student['id']; ?>" name="studentId" id="studentId">
                    </div>

                    <div class="fields">
                        <label for="studentUser">User:</label>
                        <input type="text" required class="form-control" value="<?php echo $student['user']; ?>" name="studentUser" id="studentUser" placeholder="User name">
                    </div>

                    <div class="fields">
                        <label for="studentPassword">Password:</label>
                        <input type="text" required class="form-control" value="<?php echo $student['password']; ?>" name="studentPassword" id="studentPassword" placeholder="password">
                    </div>

                    <div class="fields">
                        <label for="studentName">Name:</label>
                        <input type="text" required class="form-control" value="<?php echo $student['name']; ?>" name="studentName" id="studentName" placeholder="Name">
                    </div>

                    <div class="fields">
                        <label for="studentLastName">Last name:</label>
                        <input type="text" class="form-control" value="<?php echo $student['lastName']; ?>" name="studentLastName" id="studentLastName" placeholder="Last name">
                    </div>

                    <div class="fields">
                        <label for="studentGender">Gender</label>
                        <select  name="studentGender" id="studentGender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="fields">
                        <label for="studentDateOfBirth">Date of birth</label>
                        <input  type="date" name="studentDateOfBirth" id="studentDateOfBirth"/>
                    </div>

                    
                    <div class="fields">
                        <label for="studentEmail">Email</label>
                        <input type="email" name="studentEmail" id="studentEmail"  />
                    </div>


                    <div class="fields">
                        <label for="studentStudiesLevel">Studies level:</label>
                        <input type="text" class="form-control" value="<?php echo $student['studiesLevel']; ?>" name="studentStudiesLevel" id="studentStudiesLevel" placeholder="Studies level">
                    </div>

                    <div class="fields">
                        <label for="studentInterest">Interest:</label>
                        <input type="text" class="form-control" value="<?php echo $student['interest']; ?>" name="studentInterest" id="studentInterest" placeholder="Interest">
                    </div>

                </div>
            </fieldset>
        </form>
    </div>
</div>