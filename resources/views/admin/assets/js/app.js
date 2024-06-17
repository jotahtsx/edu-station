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

// Fechando componentes
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

// Progress bar
const progress = () => {

  const _variables = {
    main: [...document.querySelectorAll(".ease-progress")],
    inner: "ease-progress__inner",
    target: "data-current-progress"
  }

  if (_variables.main.length < 1) return

  _variables.main.forEach(prog => {
    const target = +prog.getAttribute(_variables.target)
    const inner = prog.querySelector(`.${_variables.inner}`)

    inner.style.width = `${target}%`
  })

}

progress()

const modal = () => {

  const _variables = {
    target: "data-modal-target",
    active: "edu-active"
  }

  document.addEventListener("click", edu => {

    const target = edu.target.closest(`[${_variables.target}]`)

    if (!target) return

    e.preventDefault()

    const targetId = target.getAttribute(_variables.target)
    const modal = document.querySelector(`#${targetId}`)

    if (!modal) return

    modal.classList.add(_variables.active)
    document.body.style.overflow = "hidden"

  })

  window.addEventListener("mouseup", edu => {
    const target = edu.target.closest(`[${_variables.target}]`) || edu.target.closest(`.ease-subscription-plan`)

    if (target) return

    const modal = edu.target.closest(".ease-modal")

    if (!modal || modal && !modal.classList.contains(_variables.active)) return

    modal.classList.remove(_variables.active)
    document.body.removeAttribute("style")

  })

}

modal()