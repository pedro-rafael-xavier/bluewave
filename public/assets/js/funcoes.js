function change_mobile_menu(element){
  if(element.src.includes("public/assets/images/icons/mobile/ta_comunicacoes_mobile_menu_sanduiche.svg")){
    element.src = "public/assets/images/icons/mobile/ta_comunicacoes_mobile_fechar_menu_sanduiche.svg";
  }
  else{
    element.src = "public/assets/images/icons/mobile/ta_comunicacoes_mobile_menu_sanduiche.svg";
  }
}

function open_menu(element){
  setTimeout(() => {element.click()}, 750);
}