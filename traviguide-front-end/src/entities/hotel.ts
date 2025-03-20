export default interface hotel {
  id: number;
  name: string;
  location: string;
  description: string;
  address: string;
  price_range: string;
  rating: string;
  has_activity: number;
  room_sizes: string;
  available_times: string;
  contacts: string;
  categories: string[];
  images: { id: number; url: string }[];

}
