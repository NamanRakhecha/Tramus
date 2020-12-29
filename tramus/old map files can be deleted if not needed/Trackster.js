(function(window,google, List,Direction){

	var Trackster= (function(){
		function Trackster(element, opts){
			this.gMap=new google.maps.Map(element,opts);
			this.markers= List.create();
		}
		Trackster.prototype={
			zoom:function(level){
				if(level){
					this.gMap.setZoom(level);
				}else{
					return this.gMap.getZoom();
				}
 
			},
			_on:function(opts){
		 		var self=this;
				google.maps.event.addListener(opts.obj,opts.event,function(e){
					opts.callback.call(self,e);
				})					
				
			},

			addMarker:function(opts){
				var marker;
				opts.position={
					lat:opts.lat,
					lng:opts.lng,
				}
				marker=this._createMarker(opts);
				this.markers.add(marker);
				if(opts.event){
					this._on({
						obj:marker,
						event:opts.event.name,
						callback:opts.event.callback
					});
				}
				if(opts.content){
					this._on({
						obj:marker,
						event:'click',
						callback:function(){
							var infoWindow = new google.maps.InfoWindow({
  							content:opts.content
  						});
							infoWindow.open(this.gMap,marker);
						}
					})
				}
				return marker;
				
			},
			
			findBy:function(callback){
				return this.markers.find(callback);
			},
			removeBy:function(callback){
				this.markers.find(callback, function(markers){
					markers.forEach(function(marker){
						marker.setMap(null);
					});
				});
			},

			findDirection(source,destination){

			},
			

			_createMarker:function(opts){
				opts.map=this.gMap;
				return new google.maps.Marker(opts);
			}
		};
		return Trackster;
	}());
	Trackster.create=function(element,opts){
		return new Trackster(element,opts);
	};

	window.Trackster=Trackster;

}(window,google, List))