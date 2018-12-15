   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo BASE_URL?>views/js/jquery.js"></script>
    <script src="<?php echo BASE_URL?>views/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
   <?php
   if($u->isAdmin()) {
       ?>
   <script src="<?php echo BASE_URL?>application/plugins/tinyeditor/tiny.editor.packed.js"></script>
   <script>
       var editor = new TINY.editor.edit('editor', {
           id: 'tinyeditor',
           width: 584,
           height: 175,
           cssclass: 'tinyeditor',
           controlclass: 'tinyeditor-control',
           rowclass: 'tinyeditor-header',
           dividerclass: 'tinyeditor-divider',
           controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
               'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
               'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
               'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|'],
           footer: true,
           fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
           xhtml: true,
           cssfile: 'custom.css',
           bodyid: 'editor',
           footerclass: 'tinyeditor-footer',
           toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
           resize: {cssclass: 'resize'}
       });


   </script>




<?php   }




   ?>

   <script>
       $(document).ready(function() {

           $('.post-loader').click(function(event) {
               event.preventDefault();
               var el = $(this);

               $.ajax({
                  url:el.attr('href'),
                  type:'GET',
                  success:function(data) {
                    el.parent().append(data);
                    el.remove();


                  }


                });

           });

           $('.registration_form').validate({
             rules: {
               first_name: {
               required: true,
             },
             last_name: {
               required: true,
             },
             password: {
               required: true,
             },
             passdConfirm: {
               required: true,
               equalTo: "#password"
             },
             email: {
               required: true,
               email: true
             }
             },

             messages: {
               first_name: {
                 required: "Please enter your first name",
             },
               last_name: {
                 required: "Please enter your last name",
             },
               password: {
                 required: "Please enter an arrival date",
             },
               passConfirm: {
                 required: "Please confirm your chosen password",
                 equalTo: "Password is case sensitive"
             },
               email: {
                 required: "Please enter an email address",
                 email: "Please enter a valid email address"
             }
             },
             submitHandler: function (form) {
             $(".registration_form").submit();
             }
           });





       });
    </script>



  </body>
</html>
