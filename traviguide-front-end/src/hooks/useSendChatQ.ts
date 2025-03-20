import useCreate from './useRealCreate'
import chatRes from '../entities/chatresponse'
import chatStore from '../chatStore'

const useSendChatQ = () => {
    const{setChat}=chatStore();
  const res= useCreate<chatRes,{question:string}>('travel-plan-chat');
  setChat(res.data?.data.data.choices[0].message);
  return res;
}

export default useSendChatQ