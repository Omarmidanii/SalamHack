import { Button, Input } from "@chakra-ui/react";
import { useState } from "react";
import useUpdate from "../hooks/useCreate";

const Addimages = () => {
  const [image, setImage] = useState<File | null>(null);
  const handleImageChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const file = e.target.files ? e.target.files[0] : null;
    setImage(file);
  };

  const [endpoint, setEndpoint] = useState("");
  const [id, setId] = useState("0");
  const update = useUpdate<"", FormData>(id, endpoint);

  const onSubmit = () => {
    localStorage.setItem(
      "token",
      "1|50czfnZHCMdVG5kQSMWiRWyaxZAFauwA631bVAv18b37935d"
    );
    const data = new FormData();
    if (image) {
      data.append(`images[]`, image);
      update.mutate(data);
    }
  };
  return (
    <div>
      <Input
        onChange={(e) => setEndpoint(e.target.value)}
        placeholder="endpoint"
      />
      <Input onChange={(e) => setId(e.target.value)} placeholder="id" />
      <input type="file" accept="image/*" onChange={handleImageChange} />
      <Button onClick={onSubmit}>submit</Button>
    </div>
  );
};

export default Addimages;
