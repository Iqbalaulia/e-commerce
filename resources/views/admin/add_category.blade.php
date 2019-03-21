@extends('admin_layout')
@section('admin_content')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<link rel="stylesheet" href="{{asset('backend/css/add-category.css')}}">

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Forms</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal">
                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Auto complete </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead"
                                data-items="4"
                                data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block">Start typing to activate auto complete!</p>
                        </div>
                    </div>
                    <div class="control-group" >
                        <label class="control-label" for="date01">Date input</label>
                        <div class="controls"  id="datetimepicker">
                                <input type="text" class="typedate"/>
                                <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                      </span>
                        </div>
                      
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">File input</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file">
                        </div>
                    </div>

                    <textarea id="summernote" name="editordata"></textarea>

                    <div class="">
                       
                            <button type="submit" class="btn btn-success">Save</button>
                            &nbsp;
                            <button type="reset" class="btn btn-cancel">Cancel</button>

                        
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->

    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });
   
</script>
  <script type="text/javascript">
    $('#datetimepicker').datetimepicker({
      format: 'dd/MM/yyyy hh:mm:ss',
      language: 'us'
    });
  </script>
@endsection
