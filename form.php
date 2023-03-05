<!-- form modal -->
<div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="usermodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="usermodalLabel">Adding/Updating User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="addForm" action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <!--username  -->
          <div class="mb-4">
            <label for="username">Name:</label>
            <div class="input-group">
              <span class="input-group-text bg-dark">
                <i class="fa-duotone fa-user text-light"></i>
              </span>

              <input type="text" class="form-control" placeholder="Enter Your username" autocomplete="off" required="required" id="username" name="username" />
            </div>
          </div>

          <!-- email -->
          <div class="mb-4">
            <label for="email">Email:</label>
            <div class="input-group">
              <span class="input-group-text bg-dark">
                <i class="fa-duotone fa-envelope text-light"></i>
              </span>

              <input type="text" class="form-control" placeholder="Enter Your Email" autocomplete="off" required="required" id="email" name="email" />
            </div>
          </div>

          <!-- mobile -->
          <div class="mb-4">
            <label for="mobile">Mobile:</label>
            <div class="input-group">
              <span class="input-group-text bg-dark">
                <i class="fa-duotone fa-phone text-light"></i>
              </span>

              <input
                type="text"
                class="form-control"
                placeholder="Enter Your Number"
                autocomplete="off"
                required="required"
                id="mobile"
                name="mobile"
                maxlength="10"
                minlength="10"
              />
            </div>
          </div>

          <!-- photo -->
          <div class="mb-4">
            <label for="userphoto">Photo:</label>
            <div class="input-group">
              <input type="file" class="form-control" id="userphoto" name="userphoto" aria-describedby="inputGroupFileAddon" aria-label="Upload" />
              <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon">Browse</button>
            </div>
          </div>
        </div>

        <div class="modal-footer">
            <!-- 2 input fields. first for adding and next for updating/deleting/viewing profile -->
            <input type="hidden" name="action" value="addUser">
            <input type="hidden" name="userId" id="userId" value="">
          <button type="submit" class="btn btn-dark">Submit</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        

        </div>
      </form>
    </div>
  </div>
</div>
