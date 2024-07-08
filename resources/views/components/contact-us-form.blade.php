
<div class="right-contact">
    {{--                    <livewire:components.contact-form :page="'Contact Us'"/>--}}
    <form action="" class="contact-form">
        <div class="input-control i-c-2">

            <input class="form-control" type="text" name="full_name"
                   placeholder="YOUR Name"
                   required>
            @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror


            <input class="form-control" type="email" name="email"
                   placeholder="Your Email"
                   required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror

        </div>

        <div class="input-control">
            <input class="form-control" type="text" name="phone"
                   placeholder="Phone Number">
            @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="input-control">

            <label>
<textarea  class="form-control" rows="8" name="message"
           placeholder="Message" required></textarea>
            </label>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="submit-btn">
            <a href="#" class="main-btn">
                <span class="btn-text">Submit</span>
                <span class="btn-icon"><i class="fas fa-download"></i></span>
            </a>
        </div>
    </form>


</div>
