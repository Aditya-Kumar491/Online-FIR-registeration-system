 // Form validation code will come here.
      function validate() {
	
	if( document.myForm.phno.value == "" || isNaN( document.myForm.phno.value ) ||
            document.myForm.phno.value.length != 10 ) {
            
            alert( "Please provide correct phone no." );
            document.myForm.phno.focus() ;
            return false;
         }
      
         if( document.myForm.zip.value == "" || isNaN( document.myForm.zip.value ) ||
            document.myForm.zip.value.length != 6 ) {
            
            alert( "Please provide a zip in the format ######." );
            document.myForm.zip.focus() ;
            return false;
         }
         if( document.myForm.typeComplaint.value == "-1" ) {
            alert( "Please provide your complaint!" );
            return false;
         }
	if( document.myForm.aadhar.value == "" || isNaN( document.myForm.aadhar.value ) ||
            document.myForm.aadhar.value.length != 12 ) {
            
            alert( "Please provide correct aadhar no." );
            document.myForm.aadhar.focus() ;
            return false;
         }
	
         return( true );
      }
   
