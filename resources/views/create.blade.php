<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>contact form</title>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center p-4 container-md">
        {{-- success alert --}}
                @session('success')
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endsession('success')
        {{-- end success alert --}}

        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-100 max-w-550">
          <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">
                Full Name
              </label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Full Name"
                class="form-control"
              />
              @error('name')
              <div class='text-danger'>{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">
                Email Address
              </label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="example@domain.com"
                class="form-control"
              />
              @error('email')
              <div class='text-danger'>{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">
                Subject
              </label>
              <input
                type="text"
                name="subject"
                id="subject"
                placeholder="Enter your subject"
                class="form-control"
              />
              @error('subject')
              <div class='text-danger'>{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">
                Message
              </label>
              <textarea
                rows="4"
                name="message"
                id="message"
                placeholder="Type your message"
                class="form-control"
              ></textarea>
              @error('message')
              <div class='text-danger'>{{ $message }}</div>
              @enderror
            </div>
            <div>
              <button class="btn btn-primary">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>

</body>
</html>
