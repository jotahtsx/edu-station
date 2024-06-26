const operateNavigations = (type, target, variables) => {

  let componentId = type === "dropdown" ? variables.target : variables.targetId;

  const targetId = type === "dropdown" ? target.querySelector(`[${componentId}]`).getAttribute(componentId) : target.getAttribute(componentId)

  const activeMenu = document.querySelector(`#${targetId}`)

  const nonTargeted = variables.components.map(drop => {
    const nonActiveId = drop.querySelector(`[${componentId}]`).getAttribute(componentId)
    const nonActive = document.querySelector(`#${nonActiveId}`)

    return nonActive
  })

  const filterExceptActive = nonTargeted.filter(target => target !== activeMenu)

  filterExceptActive.forEach(drop => drop.classList.remove(variables.active))

  if (activeMenu) activeMenu.classList.toggle(variables.active)

}

// Fechando componentes - Closing components
const closeComponents = (type, event, variables) => {

  const target = type === "dropdown" ? event.target.closest(`.${variables.menu}`) || event.target.closest(`[${variables.target}]`) : event.target.closest(`.${variables.menu}`) || event.target.closest(`.${variables.target}`)

  if (target) return

  variables.components.forEach(comp => {
    const menu = comp.querySelector(`.${variables.menu}`)
    if (menu.classList.contains(variables.active)) menu.classList.remove(variables.active)
  })
}

const dropdown = () => {
  const _variables = {
    main: "edu-dropdown",
    menu: "edu-dropdown__menu",
    target: "data-dropdown-target",
    active: "edu-active",
    components: [...document.querySelectorAll(`.edu-dropdown`)]
  }

  document.addEventListener("click", (edu) => {

    const target = edu.target.closest(`.${_variables.main}`)

    const targetedMenu = edu.target.closest(`.${_variables.menu}`)

    if (!target || targetedMenu) return

    edu.preventDefault()

    operateNavigations("dropdown", target, _variables);

  })

  window.addEventListener("mouseup", edu => {

    closeComponents("dropdown", edu, _variables);

  })

}

dropdown()

const navbar = () => {

  const _variables = {
    main: "edu-header",
    menu: "edu-header__navitems",
    target: "edu-header__mobile--trigger",
    targetId: "data-menu-target",
    active: "edu-active",
    components: [...document.querySelectorAll(".edu-header")]
  }

  document.addEventListener("click", edu => {

    const targetBtn = edu.target.closest(`.${_variables.target}`)

    if (!targetBtn) return

    edu.preventDefault()

    operateNavigations("navbar", targetBtn, _variables);

  })

  window.addEventListener("mouseup", edu => {

    closeComponents("navbar", edu, _variables);

  })

}

navbar()

$(document).ready(function() {

  $('#eduTable').dataTable({
    "language": {
      "lengthMenu": "Mostrando _MENU_ registros por página",
      "zeroRecords": "Nada encontrado",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Nenhum registro disponível",
      "infoFiltered": "(filtrado de _MAX_ registros no total)",
      "search": "Pesquisar"
    }
  });
});