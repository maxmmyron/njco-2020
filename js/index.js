let links = document.getElementsByClassName('sitemap-link');
for(let i=0; i<=links.length; i++){
    fitty('#sitemap-link' + i.toString());
}

/*function initCanvas(id, filePath){
    let canvas = new ChemDoodle.RotatorCanvas3D(id, $("#"+id).width(), $("#"+id).height());
    canvas.styles.set3DRepresentation('Ball and Stick');
    ChemDoodle.io.file.content(filePath, function(fileContent){
        let mol = ChemDoodle.readMOL(fileContent, 1);
        canvas.loadMolecule(mol);
        canvas.timeout = 1000/120;
        canvas.xIncrement=0;
        canvas.yIncrement=Math.PI/4;
        canvas.zIncrement=0;
        canvas.startAnimation();
    });
}

function init(){
    
}
init();
*/