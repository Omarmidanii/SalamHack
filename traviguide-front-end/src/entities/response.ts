export default interface response<T> {
  data: T;
  message: string;
  status: string;
}
