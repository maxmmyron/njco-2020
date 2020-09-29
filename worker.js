window = {};
importScripts("js/ChemDoodleWeb.js");
self.ChemDoodle = window.ChemDoodle;

onmessage = event => {
    function initCanvas(id, filePath){
        
        let canvas = new self.ChemDoodle.RotatorCanvas3D(id, $("#"+id).width(), $("#"+id).height());
        canvas.styles.set3DRepresentation('Ball and Stick');
        self.ChemDoodle.io.file.content(filePath, function(fileContent){
            let mol = ChemDoodle.readMOL(fileContent, 1);
            canvas.loadMolecule(mol);
            canvas.timeout = 1000/120;
            canvas.xIncrement=0;
            canvas.yIncrement=Math.PI/4;
            canvas.zIncrement=0;
            canvas.startAnimation();
        });
     }
     initCanvas('aldrin', 'js/mols/Aldrin.mol');
     initCanvas('chlordane', 'js/mols/Chlordane.mol');
     initCanvas('ddt', 'js/mols/DDT.mol');
     initCanvas('deildrin', 'js/mols/Deildrin.mol');
     initCanvas('endrin', 'js/mols/Endrin.mol');
     initCanvas('heptachlor', 'js/mols/Heptachlor.mol');
     initCanvas('hexachlorobenzene', 'js/mols/Hexachlorobenzene.mol');
     initCanvas('mirex', 'js/mols/Mirex.mol');
     initCanvas('pcb', 'js/mols/Pcb-95.mol');
     initCanvas('pcdd', 'js/mols/Pcdd-48.mol');
     initCanvas('pcdf', 'js/mols/Pcdf-83.mol');
     initCanvas('toxaphene', 'js/mols/Toxaphene.mol');
     self.postMessage("Success");
};

onerror = event => {
    console.log(event.data);
};