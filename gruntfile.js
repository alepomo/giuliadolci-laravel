module.exports = function(grunt) {

  'use strict';

  // load all grunt tasks
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
    
	grunt.initConfig({

    // variables
    dest : 'laravel/public/assets',
    src  : 'laravel/app/assets',

		// – – – – – – – – – –
		// COMMON TASKS
		// – – – – – – – – – –
		    
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          '<%= dest %>/css/app.css': '<%= src %>/sass/app.scss',
        }
      }
    },
    
		// less: {
		//   development: {
		//     files: {
		//       publicDir + '/css/app.css': '<%= src %>/sass/app.sass',
		//     }
		//   }
	  // },
	  
		jshint: {
			all: [ '<%= src %>/js/app.js' ]
		},

    uglify: {
      my_target: {
        files: {
          '<%= dest %>/js/app.min.js': ['<%= src %>/js/app.js'],
        }
      }
    },
	      
		// – – – – – – – – – –
		// WATCH + BROWSER SYNC
		// – – – – – – – – – –
		
	  watch: {
      sass: {
		  	files: [ '<%= src %>/sass/*.scss' ],
		  	tasks: ['sass']
      },
	    jshint: {
		  	files: [ '<%= src %>/js/*.js' ],
		  	tasks: ['jshint', 'uglify']
	  	},
		},
		
		browserSync: {
		    dev: {
		        bsFiles: {
		            src : [
		            	'<%= dest %>/css/*.css',
		            	'<%= dest %>/js/*.js',
		            	'<%= src %>/*.php',
		            	'<%= src %>/**/*.php'
		            	]
		        },
		        options: {
	            proxy:  "giuliadolci.cms",
			        watchTask: true,
              ghostMode: {
	                clicks: false,
	                scroll: false,
	                links:  false,
	                forms:  false
	            }
		        }
		    }
		}

	});
	
  grunt.registerTask('default');
  
  //grunt.loadNpmTasks('watch');
  //grunt.loadNpmTasks('browserSync');
	
	
};