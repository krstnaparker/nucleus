<?hh
/**
 * This file is partially generated. Only make modifications between BEGIN
 * MANUAL SECTION and END MANUAL SECTION designators.
 *
 * @partially-generated SignedSource<<ae9f60fd67105cdfe6f71230ed05e7f2>>
 */

final class User {

  private function __construct(private Map<string, mixed> $data) {
  }

  public static function load(int $id): ?User {
    $result = DB::queryFirstRow("SELECT * FROM users WHERE id=%s", $id);
    if (!$result) {
      return null;
    }
    return new User(new Map($result));
  }

  public function getID(): int {
    return (int) $this->data['id'];
  }

  public function getEmail(): string {
    return (string) $this->data['email'];
  }

  public function getFirstName(): string {
    return (string) $this->data['fname'];
  }

  public function getLastName(): string {
    return (string) $this->data['lname'];
  }

  public function getGraduation(): string {
    return (string) $this->data['graduation'];
  }

  public function getMajor(): string {
    return (string) $this->data['major'];
  }

  public function getShirtSize(): string {
    return (string) $this->data['shirt_size'];
  }

  public function getDietaryRestrictions(): string {
    return (string) $this->data['dietary_restrictions'];
  }

  public function getSpecialNeeds(): string {
    return (string) $this->data['special_needs'];
  }

  public function getBirthday(): DateTime {
    return new DateTime($this->data['birthday']);
  }

  public function getGender(): string {
    return (string) $this->data['gender'];
  }

  public function getPhoneNumber(): string {
    return (string) $this->data['phone_number'];
  }

  public function getSchool(): string {
    return (string) $this->data['school'];
  }

  public function getStatus(): int {
    return (int) $this->data['status'];
  }

  /* BEGIN MANUAL SECTION User_footer */
  public function getRoles(): Set<UserRole> {
    return Roles::getRoles($this->getID());
  }

  public function getState(): UserState {
    return UserState::assert($this->getStatus());
  }
  /* END MANUAL SECTION */
}
