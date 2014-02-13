describe("Tester", function(){
	var validate = true;
    var firstName = 'Xike';
    var lastName = 'Wang';
    var userName = 'xike';
    var password = '';
    var re_password = '123321';
    var email = '';
    beforeEach(function(){
    	welcome = {
          test: function(){
          	 
       		 if (firstName === '')
			 {
				 validate = false;
			 }
			 if (lastName === '')
			 {
			 	 validate = false;
			 }
			 if (userName === '')
			 {
				 validate = false;
			 }
			 if (password === '')
			 {
				 validate = false;
			 }
		 	 if (re_password === '')
			 {
				 validate = false;
			 }	 
			 if (email === '')
			 {
				 validate = false;
			 }	
		  return validate;
      	  }
       };
    });  
    it("Test test function", function(){
       expect(welcome.test()).toBe(false);
    });
    it("Test change function", function(){
    	var num = 11;
    	var money = num * 2;
    	expect(money).toBe(22);
    });
    it("Test change function", function(){
    	var num = 11;
    	num++;
    	var money = num * 2;
    	expect(money).toBe(24);
    });

});