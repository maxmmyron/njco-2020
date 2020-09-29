$(".clipped").click(function(){
    if($(this).hasClass("clip-sm")){
        $(this).siblings('.plus-button').children('.fa-plus').toggleClass('rotate-45');
        $(this).addClass("clip-lg");
        $(this).removeClass("clip-sm");
        let x = $(this);
        setTimeout(function(){
            x.siblings('.clipped').addClass("clip-sm");
            x.siblings('.clipped').removeClass("clip-lg");
        }, 600);
    }
});

$(".circle-handling__button").click(function(){
    let buttonParent = $(this).parent();
    let buttonBGFill = $(this).siblings('#circle-handling__clip-fill');
    let rotatedSiblings = $(this).siblings('.circle-handling__item');
    $(this).children('.fa-plus').toggleClass('circle-handling__rotate-45');
    if(buttonParent.hasClass("circle-handling__clip-sm")){
        buttonParent.addClass("circle-handling__clip-lg");
        buttonParent.removeClass("circle-handling__clip-sm");
        buttonBGFill.addClass("circle-handling__clip-fill-lg");
        buttonBGFill.removeClass("circle-handling__clip-fill-sm");
        rotatedSiblings.addClass('circle-handling__item-lg');
        rotatedSiblings.removeClass('circle-handling__item-sm');
    }
    else{
        buttonParent.addClass("circle-handling__clip-sm");
        buttonParent.removeClass("circle-handling__clip-lg");
        buttonBGFill.addClass("circle-handling__clip-fill-sm");
        buttonBGFill.removeClass("circle-handling__clip-fill-lg");
        rotatedSiblings.addClass('circle-handling__item-sm');
        rotatedSiblings.removeClass('circle-handling__item-lg');
    }
});

function initCanvas(id, filePath){
    let canvas = new ChemDoodle.RotatorCanvas3D(id, $("#"+id).width(), $("#"+id).height());

    canvas.styles.set3DRepresentation('Ball and Stick');
    canvas.styles.backgroundColor = '#eeeeee';

    ChemDoodle.io.file.content(filePath, function(fileContent){
        let mol = ChemDoodle.readMOL(fileContent, 1);
        canvas.loadMolecule(mol);
        
        canvas.timeout = 1000/120;
        canvas.xIncrement=0;
        canvas.yIncrement=Math.PI/4;
        canvas.zIncrement=0;
        canvas.camera.zoomIn();
        
        canvas.setupScene();
        canvas.repaint();
        canvas.startAnimation();
    });
}


initCanvas('aldrin', 'js/mols/Aldrin.mol');
initCanvas('chlordane', 'js/mols/Chlordane.mol');
initCanvas('ddt', 'js/mols/DDT.mol');
initCanvas('dieldrin', 'js/mols/Deildrin.mol');
initCanvas('endrin', 'js/mols/Endrin.mol');
initCanvas('heptachlor', 'js/mols/Heptachlor.mol');
initCanvas('hexachlorobenzene', 'js/mols/Hexachlorobenzene.mol');
initCanvas('mirex', 'js/mols/Mirex.mol');
initCanvas('pcb', 'js/mols/Pcb-95.mol');
initCanvas('pcdd', 'js/mols/Pcdd-48.mol');
initCanvas('pcdf', 'js/mols/Pcdf-83.mol');
initCanvas('toxaphene', 'js/mols/Toxaphene.mol');