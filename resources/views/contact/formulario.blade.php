


<div>
    <form action = "/insertMenssage" method="POST">
        @method('put')
        @csrf  {{--para agregr el token--}}

        <div class="form-group">
            <label for="inputAddress">User</label>
            <input type="text" class="form-control" id="user_contact" placeholder="1234 Main St" name="user_contact">

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email_contact"  placeholder="Enter email" name="email_contact">
          </div>
          <div class="form-group">
            <label for="inputAddress">Telephone</label>
            <input type="text" class="form-control" id="telephone" placeholder="55 45 56 56" name="telephone">
        </div>
        <div class="form-group">
            <label class="form-label" for="textAreaExample">Message</label>
            <textarea class="form-control" id="message" rows="4" name="message"></textarea>
 
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>