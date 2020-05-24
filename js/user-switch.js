(function($, Models, Collections, Views) {
	$(document).ready(function() {
    initialize: function() {
        this.user = AE.App.user;
        this.blockUi = new Views.BlockUi();
        this.initValidator();
      });
    
  });}
