var canvas;
function Timeline(start, end){
    
    this.start=start;
    this.end=end;
    this.canvas=document.getElementById("timeline").getContext("2d");
    this.canvas.fillStyle="lightblue";
    this.canvas.fillRect(canvas.left,canvas,300,400);
}
    var date=new Date();
    var timeline = new Timeline(new Date(1963,12,24),new Date(2016,05,11));
    