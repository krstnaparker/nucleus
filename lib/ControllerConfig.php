<?hh

class ControllerConfig {
  private string $title = '';
  private Vector<UserState> $user_state = Vector {};
  private Vector<UserRole> $user_roles = Vector {};

  /**
   * Set the required user states for a controller
   *
   * A user must have one of the states specified by this function in order to
   * access the methods of a controller.
   */
  public function setUserState(Vector<UserState> $states): this {
    $this->user_state = $states;
    return $this;
  }

  public function getUserState(): Vector<UserState> {
    return $this->user_state;
  }

  /**
   * Set the required user roles for a controller
   *
   * A user must have one of the roles specified by this function in order to
   * access the methods of a controller.
   */
  public function setUserRoles(Vector<UserRole> $roles): this {
    $this->user_roles = $roles;
    return $this;
  }

  public function getUserRoles(): Vector<UserRole> {
    return $this->user_roles;
  }

  /**
   * Set the title for the controller
   *
   * By specifying a title with this function, when rendered, the page title
   * will contain the title specified.
   */
  public function setTitle(string $title): this {
    $this->title = $title;
    return $this;
  }

  public function getTitle(): string {
    return $this->title;
  }
}
