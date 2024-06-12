const dropdown = () => {
  const _variables = {
    main: "edu-dropdown",
    menu: "edu-dropdown__menu",
    target: "data-dropdown-target",
    active: "edu-active",
    components: [...document.querySelectorAll(`.edu-dropdown`)]
  }

  const dropDown = [...document.querySelectorAll(`.${_variables.main}`)]

  document.addEventListener("click", (edu) => {

    const target = edu.target.closest(`.${_variables.main}`)

    const targetedMenu = edu.target.closest(`.${_variables.menu}`)

    if (!target || targetedMenu) return

    const targetId = target.querySelector(`[${_variables.target}]`).getAttribute(_variables.target)

    const activeMenu = document.querySelector(`#${targetId}`)

    const nonTargeted = _variables.components.map(drop => {
      const nonActiveId = drop.querySelector(`[${_variables.target}]`).getAttribute(_variables.target)
      const nonActive = document.querySelector(`#${nonActiveId}`)

      return nonActive
    })

    const filterExceptActive = nonTargeted.filter(target => target !== activeMenu)

    filterExceptActive.forEach(drop => drop.classList.remove(_variables.active))

    if (activeMenu) activeMenu.classList.toggle(_variables.active)

  })

  window.addEventListener("mouseup", edu => {

    const target = edu.target.closest(`[${_variables.target}]`) || edu.target.closest(`.${_variables.target}`)
    console.log(target)

    if(target) return

    _variables.components.forEach( drop => {
      const menu = drop.querySelector(`.${_variables.menu}`)
      if(menu.classList.contains(_variables.active)) menu.classList.remove(_variables.active)
    })
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
    const targetBtn = edu.target.closest(`.${_variables.target}`);
    if (!targetBtn) return

    edu.preventDefault()

    const targetId = targetBtn.getAttribute(_variables.targetId)
    const activeMenu = document.querySelector(`#${targetId}`)

    const nonTargeted = _variables.components.map(head => {
      const nonActiveId = head.querySelector(`[${_variables.targetId}]`).getAttribute(_variables.targetId)
      const nonActive = document.querySelector(`#${nonActiveId}`)

      return nonActive
    })

    const filterExceptActive = nonTargeted.filter(target => target !== activeMenu)

    filterExceptActive.forEach(head => head.classList.remove(_variables.active))

    if (activeMenu) activeMenu.classList.toggle(_variables.active)
  })

  window.addEventListener("mouseup", edu => {

    const target = edu.target.closest(`.${_variables.menu}`) || edu.target.closest(`.${_variables.target}`)
    console.log(target)

    if(target) return

    _variables.components.forEach(head => {
      const menu = head.querySelector(`.${_variables.menu}`)
      if(menu.classList.contains(_variables.active)) menu.classList.remove(_variables.active)
    })
  })

}

navbar()