export default interface similarEntities {
  id: number;
  name: string;
  location: string;
  description: string;
  address: string;
  price_range: string;
  rating: string;
  open_time: string;
  close_time: string;
  contacts: string;
  categories: string[];
  images: { id: number; url: string }[];
}
