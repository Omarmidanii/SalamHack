import { useMutation } from "@tanstack/react-query";
import response from "../entities/response";
import APIClient, { setAuthToken } from "../services/APIClient";

const useCreate = <T, D>(endPoint: string) => {
  const apiClient = new APIClient<response<T>>(`/${endPoint}`);
  setAuthToken();
  return useMutation<response<T>, Error, D>({
    mutationKey: [`create${endPoint}`],
    mutationFn: (data) => apiClient.post<D>(data),
    onError(error: any) {
      if (error.response && error.response.status === 422) {
      } else if (error.response) {
        console.error("An error occurred:", error.message);
      }
    },
    onSuccess: (vlaues, variables) => {
      console.log(vlaues, variables);
    },
  });
};
export default useCreate;
