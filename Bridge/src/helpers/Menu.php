<?php

namespace Bridge\Src\Helpers;

class Menu
{

    public string $identifier;

    public string $route;

    public string $label;

    public array $parameters;

    public string|null $icon_class = null;

    public string|null $icon_img_url = null;

    public string|null $attr_class = null;

    public string $attr_OnClick;

    public Menu $menu;


    public function __construct()
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * @param string $route
     */
    public function setRoute(string $route = "#"): void
    {
        $this->route = $route;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     */
    public function setParameters(array $parameters = []): void
    {
        $this->parameters = $parameters;
    }

    /**
     * @return Menu
     */
    public function getMenu(): Menu
    {
        return $this->menu;
    }

    /**
     * @param Menu $menu
     */
    public function setMenu(?Menu $menu): void
    {
        $this->menu = $menu;

    }

    /**
     * @return string
     */
    public function getIconClass(): string |null
    {
        return $this->icon_class;
    }

    /**
     * @param string $icon_class
     */
    public function setIconClass(string|null $icon_class): void
    {
        $this->icon_class = $icon_class;
    }

    /**
     * @return string
     */
    public function getIconImgUrl(): string |null
    {
        return $this->icon_img_url;
    }

    /**
     * @param string $icon_img_url
     */
    public function setIconImgUrl(string|null $icon_img_url): void
    {
        $this->icon_img_url = $icon_img_url;
    }

    /**
     * @return string
     */
    public function getAttrClass(): string |null
    {
        return $this->attr_class;
    }

    /**
     * @param string $attr_class
     */
    public function setAttrClass(string|null $attr_class): void
    {
        $this->attr_class = $attr_class;
    }

    /**
     * @return string
     */
    public function getAttrOnClick(): string |null
    {
        return $this->attr_OnClick;
    }

    /**
     * @param string $attr_OnClick
     */
    public function setAttrOnClick(string|null $attr_OnClick = 'javascript:0'): void
    {
        $this->attr_OnClick = $attr_OnClick;
    }


}