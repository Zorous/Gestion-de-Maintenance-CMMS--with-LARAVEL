@extends('services.services-layout')

@section('content')
<div class="col-md-9 m-5" style="margin:10vw !important;">

<form action="/services/technicien/sendMail"  enctype="multipart/form-data">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Compose New Message</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="form-group">
          <input class="form-control" placeholder="To:" value="{{ $technicien->email }}">
        </div>
        <div class="form-group">
          <input class="form-control" name="subject" placeholder="Subject:">
        </div>
        <div class="form-group">
            <textarea id="compose-textarea" class="form-control" style="height: 300px">
              <h1><u>Heading Of Message</u></h1>
              <h4>Subheading</h4>
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                was born and I will give you a complete account of the system, and expound the actual teachings</p>
              <ul>
                <li>List item one</li>
                <li>List item two</li>
                <li>List item three</li>
                <li>List item four</li>
              </ul>
              <p>Thank you,</p>
              <p>John Doe</p>
            </textarea>
        </div>
        <div class="form-group">
          <div class="btn btn-default btn-file">
            <i class="fas fa-paperclip"></i> Attachment
            <input type="file" name="attachment">
          </div>
          <p class="help-block">Max. 32MB</p>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="float-right">
          <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
          <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
        </div>
        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
      </div>
      <!-- /.card-footer -->
    </div>
</form>
    <!-- /.card -->
  </div>

@endsection
@section('title','Envoi d\' email')
